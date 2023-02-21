FROM wordpress:latest

COPY ./plugins/ /usr/src/wordpress/wp-content/plugins/
COPY ./wp-config.php /usr/src/wordpress
ENV WORDPRESS_DB_USER=root
ENV WORDPRESS_DB_PASSWORD=123secret
ENV WORDPRESS_DB_NAME=test_db

  # PHP upload size
RUN { \
    echo 'upload_max_filesize = 256M'; \
    echo 'post_max_size = 256M'; \
	} > /usr/local/etc/php/conf.d/extra.ini

  # Enable sendmail
RUN \
  #
  # Install sendmail
    apt-get update \
 && apt-get install -y --no-install-recommends sendmail \
 && rm -rf /var/lib/apt/lists/* \
  #
  # Configure php to use sendmail
 && echo "sendmail_path=sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini \
  #
  # Create script to use as new entrypoint, which
  # 1. Creates a localhost entry for container hostname in /etc/hosts
  # 2. Restarts sendmail to discover this entry
  # 3. Calls original docker-entrypoint.sh
 && echo '#!/bin/bash' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && echo 'set -euo pipefail' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && echo 'echo "127.0.0.1 $(hostname) localhost localhost.localdomain" >> /etc/hosts' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && echo 'service sendmail restart' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && echo 'exec docker-entrypoint.sh "$@"' >> /usr/local/bin/docker-entrypoint-wrapper.sh \
 && chmod +x /usr/local/bin/docker-entrypoint-wrapper.sh

 # Install & activate WpFastestCache


EXPOSE 80
ENTRYPOINT ["docker-entrypoint-wrapper.sh"]
CMD ["apache2-foreground"]