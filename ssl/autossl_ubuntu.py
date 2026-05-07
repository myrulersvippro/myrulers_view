import os
import requests
import time
import simple_acme_dns
from cryptography.hazmat.primitives.serialization import (
    load_pem_private_key,
    Encoding,
    PrivateFormat,
    NoEncryption,
)

# === CẤU HÌNH NGƯỜI DÙNG ===
CF_API_TOKEN = "cfut_8maroagmYP2su19Eomqcn78EHZD1ltrvK75pLlGH036d35bf"
DNS_NAMESERVERS = ["1.1.1.1", "8.8.8.8"]
BASE_DIR = os.getcwd()
ACME_DIRECTORY = "https://acme-v02.api.letsencrypt.org/directory"

# === CẤU HÌNH DELAY (CHỐNG SPAM/RATE LIMIT) ===
DELAY_BETWEEN_PAGES = 1.5   # Giây nghỉ giữa các trang danh sách Zone
DELAY_DNS_CREATE = 2.0      # Giây nghỉ sau khi tạo mỗi bản ghi TXT
DELAY_BETWEEN_DOMAINS = 5.0 # Giây nghỉ sau khi xong 1 domain
# ===========================================

def get_zone_id(domain):
    """Tìm Zone ID với cơ chế phân trang và Delay chống chặn API"""
    headers = {"Authorization": f"Bearer {CF_API_TOKEN}"}
    page = 1
    per_page = 50 

    while True:
        url = f"https://api.cloudflare.com/client/v4/zones?page={page}&per_page={per_page}"
        try:
            if page > 1: time.sleep(DELAY_BETWEEN_PAGES)
            
            resp = requests.get(url, headers=headers).json()
            if not resp.get("success"):
                # Xử lý nếu bị Rate Limit (Lỗi 429)
                if any(err.get('code') == 1200 for err in resp.get('errors', [])):
                    print("⚠️ Cloudflare đang giới hạn tốc độ. Nghỉ 30s...")
                    time.sleep(30)
                    continue
                raise RuntimeError(f"Lỗi Cloudflare API: {resp.get('errors')}")

            zones = resp.get("result", [])
            if not zones: break

            # Sắp xếp để khớp zone chính xác nhất (ưu tiên zone dài nhất)
            zones.sort(key=lambda x: len(x['name']), reverse=True)

            for z in zones:
                if domain == z['name'] or domain.endswith("." + z['name']):
                    print(f"🔍 Tìm thấy Zone: {z['name']} (ID: {z['id']})")
                    return z["id"]

            result_info = resp.get("result_info", {})
            if page < result_info.get("total_pages", 1):
                page += 1
            else: break
        except Exception as e:
            raise RuntimeError(f"Lỗi kết nối Cloudflare: {e}")

    raise RuntimeError(f"❌ Không tìm thấy Zone tương ứng cho domain: {domain}")

def create_txt_cf(zone_id, record, value):
    """Tạo bản ghi TXT xác thực trên Cloudflare"""
    data = {"type": "TXT", "name": record, "content": value, "ttl": 60}
    headers = {"Authorization": f"Bearer {CF_API_TOKEN}", "Content-Type": "application/json"}
    url = f"https://api.cloudflare.com/client/v4/zones/{zone_id}/dns_records"
    
    time.sleep(DELAY_DNS_CREATE) # Tránh gửi yêu cầu tạo liên tục
    r = requests.post(url, json=data, headers=headers).json()
    if not r.get("success"):
        raise RuntimeError(f"Lỗi tạo bản ghi DNS: {r}")
    return r["result"]["id"]

def delete_txt_cf(zone_id, record_id):
    """Xóa bản ghi TXT sau khi dùng xong"""
    headers = {"Authorization": f"Bearer {CF_API_TOKEN}"}
    url = f"https://api.cloudflare.com/client/v4/zones/{zone_id}/dns_records/{record_id}"
    requests.delete(url, headers=headers)

def save_certificates(dom_path, fullchain_pem, privkey_pem):
    """Tách và lưu các file chứng chỉ"""
    with open(os.path.join(dom_path, "fullchain.pem"), "wb") as f:
        # Nếu muốn đảm bảo các cert cách nhau bởi đúng 1 dấu xuống dòng
        parts = fullchain_pem.strip().split(b"-----END CERTIFICATE-----")
        cleaned_content = b"\n".join([p.strip() + b"\n-----END CERTIFICATE-----" for p in parts if p.strip()]) + b"\n"
        f.write(cleaned_content)

    # Chuyển Private Key sang định dạng PKCS8 (Chuẩn hóa)
    key_obj = load_pem_private_key(privkey_pem, password=None)
    pkcs8_key = key_obj.private_bytes(
        encoding=Encoding.PEM,
        format=PrivateFormat.PKCS8,
        encryption_algorithm=NoEncryption(),
    )
    with open(os.path.join(dom_path, "private.key"), "wb") as f:
        f.write(pkcs8_key)

def renew_all_domains():
    # Lấy danh sách các thư mục hợp lệ (có dấu chấm trong tên)
    folders = [f for f in os.listdir(BASE_DIR) if "." in f and os.path.isdir(os.path.join(BASE_DIR, f))]
    
    if not folders:
        print("❌ Không tìm thấy thư mục domain nào trong BASE_DIR.")
        return

    print(f"📂 Tìm thấy {len(folders)} domain cần xử lý.")

    for i, folder in enumerate(folders):
        dom_path = os.path.join(BASE_DIR, folder)
        print(f"\n🚀 [{i+1}/{len(folders)}] Đang cấp chứng chỉ cho: {folder}")

        record_ids = []
        current_zone_id = None

        try:
            # 1. Tìm Zone ID
            current_zone_id = get_zone_id(folder)

            # 2. Khởi tạo ACME Client
            client = simple_acme_dns.ACMEClient(
                domains=[folder],
                email=f"admin@{folder}",
                directory=ACME_DIRECTORY,
                nameservers=DNS_NAMESERVERS,
                new_account=True,
                generate_csr=True,
            )

            # 3. Đẩy token lên Cloudflare DNS
            tokens = client.request_verification_tokens()
            for rec, token_list in tokens.items():
                for token in token_list:
                    print(f"  • Tạo TXT: {rec}")
                    rid = create_txt_cf(current_zone_id, rec, token)
                    record_ids.append(rid)

            # 4. Xác thực DNS (Đợi tối đa 5 phút)
            print("  • Đang đợi DNS lan truyền (Propagation Check)...")
            client.check_dns_propagation(timeout=300, interval=15)
            time.sleep(10) # Nghỉ thêm 10s cho chắc chắn

            # 5. Yêu cầu cấp chứng chỉ
            print("  • Đang yêu cầu Let's Encrypt ký chứng chỉ...")
            client.request_certificate()
            
            # 6. Lưu file
            save_certificates(dom_path, client.certificate, client.private_key)
            print(f"✅ Đã lưu chứng chỉ vào thư mục /{folder}")

        except Exception as e:
            print(f"❌ Lỗi tại {folder}: {e}")
        
        finally:
            # Luôn xóa bản ghi DNS dù thành công hay thất bại
            if record_ids and current_zone_id:
                print("  • Đang dọn dẹp bản ghi DNS...")
                for rid in record_ids:
                    delete_txt_cf(current_zone_id, rid)
            
            # Delay giữa các domain để tránh spam hệ thống
            if i < len(folders) - 1:
                print(f"☕ Nghỉ {DELAY_BETWEEN_DOMAINS}s...")
                time.sleep(DELAY_BETWEEN_DOMAINS)

if __name__ == "__main__":
    renew_all_domains()
    print("\n🏁 Hoàn tất toàn bộ tiến trình.")