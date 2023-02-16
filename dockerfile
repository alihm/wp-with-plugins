FROM wordpress:latest

# COPY ./wp-content/ /usr/src/wordpress/wp-content
COPY ./wp-config.php /usr/src/wordpress
ENV WORDPRESS_DB_USER=root
ENV WORDPRESS_DB_PASSWORD=secret
ENV WORDPRESS_DB_NAME=test_db
RUN { \
		echo 'upload_max_filesize = 512M'; \
	} > /usr/local/etc/php/conf.d/extra.ini


# CMD ['sh', '-c', 'chown -R 1001:root /opt/bitnami/wordpress']
WORKDIR /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]