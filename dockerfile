FROM bitnami/wordpress-nginx:latest

# COPY ./wp-content/ /usr/src/wordpress/wp-content
# COPY ./wp-config.php /usr/src/wordpress/
ENV WORDPRESS_DATABASE_USER=root
ENV WORDPRESS_DATABASE_PASSWORD=123secret
ENV WORDPRESS_DATABASE_NAME=test_db
 # WORKDIR /var/www/html
EXPOSE 8080
CMD [ "/opt/bitnami/scripts/nginx-php-fpm/run.sh" ]