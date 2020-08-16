
FROM php:7.1-fpm-alpine

WORKDIR /var/www/html

RUN sed -i 's/http\:\/\/dl-cdn.alpinelinux.org/https\:\/\/alpine.global.ssl.fastly.net/g' /etc/apk/repositories

RUN docker-php-ext-install pdo pdo_mysql
