FROM php:fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk update --no-cache
RUN apk add --no-cache $PHPIZE_DEPS
RUN docker-php-ext-install pdo pdo_mysql