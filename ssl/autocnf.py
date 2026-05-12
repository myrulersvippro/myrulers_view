import os

BASE_DIR = os.getcwd()

if __name__ == "__main__":
    with open("nginx_config.txt", "w") as f:
        for folder in os.listdir(BASE_DIR):
            dom_path = os.path.join(BASE_DIR, folder)
            if not os.path.isdir(dom_path):
                continue
            if "." not in folder:
                continue
            f.write(
                f"""
server {{
    listen 443 ssl;
    server_name {folder};
    ssl_certificate     /var/www/ssl/{folder}/cert.crt;
    ssl_certificate_key /var/www/ssl/{folder}/prv.key;
    include snippets/common.conf;
}}

""")