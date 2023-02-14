FROM wordpress:6-php8.0-fpm

# COPY ./wp-content/ /usr/src/wordpress/wp-content
COPY ./wp-config.php /usr/src/wordpress/

 WORKDIR /var/www/html
 EXPOSE 80
 CMD ["php-fpm"]