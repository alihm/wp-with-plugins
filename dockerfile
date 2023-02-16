FROM bitnami/wordpress-nginx:latest

# COPY ./wp-content/ /usr/src/wordpress/wp-content
COPY ./wp-config.php /opt/bitnami/wordpress/
ENV WORDPRESS_DATABASE_USER=root
ENV WORDPRESS_DATABASE_PASSWORD=123secret
ENV WORDPRESS_DATABASE_NAME=test_db
ENV WORDPRESS_DATABASE_PORT_NUMBER=3307
ENV PHP_UPLOAD_MAX_FILESIZE=512M
ENV WORDPRESS_EXTRA_WP_CONFIG_CONTENT="define('DISABLE_WP_CRON',true);"
ENV WORDPRESS_ENABLE_REVERSE_PROXY=yes
# ENV WORDPRESS_DATA_TO_PERSIST="wp-content"
# ENV WORDPRESS_OVERRIDE_DATABASE_SETTINGS=yes
ENV WORDPRESS_RESET_DATA_PERMISSIONS=yes
ENV WORDPRESS_SKIP_INSTALL=yes
ENV WORDPRESS_SKIP_BOOTSTRAP=yes
COPY ./libwordpress.sh /opt/bitnami/scripts/
# CMD ['sh', '-c', 'chown -R 1001:root /opt/bitnami/wordpress']
 # WORKDIR /var/www/html
EXPOSE 8080
USER 1001
ENTRYPOINT [ "/opt/bitnami/scripts/wordpress/entrypoint.sh" ]
CMD [ "/opt/bitnami/scripts/nginx-php-fpm/run.sh" ]