FROM php:fpm-alpine

RUN apk update && apk add libmcrypt-dev mysql-client zlib-dev libpng-dev \
    && docker-php-ext-install pdo_mysql bcmath gd
