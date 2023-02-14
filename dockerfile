FROM bitnami/wordpress-nginx:latest

# COPY ./wp-content/ /usr/src/wordpress/wp-content
# COPY ./wp-config.php /opt/bitnami/wordpress/
COPY ./libwordpress.sh /opt/bitnami/scripts/
ENV WORDPRESS_DATABASE_USER=root
ENV WORDPRESS_DATABASE_PASSWORD=secret
ENV WORDPRESS_DATABASE_NAME=test_db
ENV WORDPRESS_DATABASE_PORT_NUMBER=3307
ENV PHP_UPLOAD_MAX_FILESIZE=512M
ENV WORDPRESS_EXTRA_WP_CONFIG_CONTENT="define('DISABLE_WP_CRON',true);"
ENV WORDPRESS_ENABLE_REVERSE_PROXY=yes
ENV WORDPRESS_DATA_TO_PERSIST="wp-content"
ENV WORDPRESS_OVERRIDE_DATABASE_SETTINGS=yes

 # WORKDIR /var/www/html
EXPOSE 8080
CMD [ "/opt/bitnami/scripts/nginx-php-fpm/run.sh" ]