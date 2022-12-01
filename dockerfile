FROM wordpress:latest

COPY ./wp-content/ /usr/src/wordpress/wp-content
COPY ./wp-config.php /usr/src/wordpress/

 WORKDIR /var/www/html
 EXPOSE 80
 CMD ["apache2-foreground"]