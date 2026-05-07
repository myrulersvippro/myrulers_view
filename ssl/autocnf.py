import os

BASE_DIR = os.getcwd()

if __name__ == "__main__":
    with open("default", "w") as f:
        f.write('')
    with open("default", "a") as f:
        for folder in os.listdir(BASE_DIR):
            dom_path = os.path.join(BASE_DIR, folder)
            if not os.path.isdir(dom_path):
                continue
            if "." not in folder:
                continue
            f.write(
                f"""
server {{
    set $php_sock unix:/run/php/php8.2-fpm.sock;

    listen 443 ssl;
    server_name {folder};

    root /var/www/public;

    index index.php index.html;

    ssl_certificate     /var/www/ssl/{folder}/cert.crt;
    ssl_certificate_key /var/www/ssl/{folder}/prv.key;

    include snippets/common.conf;
}}

"""
            )