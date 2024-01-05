FROM php:fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk update --no-cache
RUN apk add --no-cache $PHPIZE_DEPS
RUN apk add --no-cache vim
RUN apk add --no-cache npm
RUN apk add --no-cache supervisor
RUN docker-php-ext-install pdo pdo_mysql
ADD supervisord.conf /etc/
RUN mkdir -p /etc/supervisor/conf.d
COPY startup-script.conf /etc/supervisor/conf.d
COPY startup.sh /scripts/startup.sh

CMD ["/usr/bin/supervisord"]