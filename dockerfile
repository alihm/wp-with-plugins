FROM wordpress:fpm-alpine

# COPY ./wp-content/ /usr/src/wordpress/wp-content
COPY ./wp-config.php /usr/src/wordpress/

 WORKDIR /var/www/html
 EXPOSE 9000
 CMD ["php-fpm"]