FROM wordpress:latest

# Copia o wp-config.php customizado
COPY wp-config.php /var/www/html/wp-config.php

# Aumenta os limites de upload no PHP
RUN echo "upload_max_filesize=64M" >> /usr/local/etc/php/conf.d/uploads.ini \
    && echo "post_max_size=64M" >> /usr/local/etc/php/conf.d/uploads.ini
