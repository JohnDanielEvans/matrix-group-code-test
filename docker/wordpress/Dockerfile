ARG WORDPRESS_VERSION=latest
FROM wordpress:$WORDPRESS_VERSION

RUN mkdir /var/www/wp-core && mv /usr/src/wordpress/* /var/www/wp-core/
RUN mv /var/www/wp-core /var/www/html/

CMD apache2-foreground
