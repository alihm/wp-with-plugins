FROM wordpress:latest

COPY ./wp-content/ /usr/src/wordpress/wp-content

 WORKDIR /var/www/html
 EXPOSE 80
 CMD ["apache2-foreground"]