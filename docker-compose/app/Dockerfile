ARG PHP_VERSION
FROM php:$PHP_VERSION-apache AS prod

ENV APACHE_DOCUMENT_ROOT /var/www/html

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
	sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf && \
	a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

FROM prod as dev
ARG XDEBUG_VERSION=3.1.2
ARG XDEBUG_CLIENT_PORT=9003

RUN yes | pecl install xdebug-$XDEBUG_VERSION \
	&& docker-php-ext-enable xdebug

RUN mkdir -p /var/log/xdebug && \
chown -hR www-data:www-data /var/log/xdebug && \
printf '[xdebug]\n\
xdebug.mode=develop\n\
xdebug.start_with_request=default\n\
xdebug.discover_client_host=1\n\
xdebug.remote_handler=dbgp\n\
xdebug.client_port='$XDEBUG_CLIENT_PORT'\n\
xdebug.client_host=localhost\n'\
>> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
