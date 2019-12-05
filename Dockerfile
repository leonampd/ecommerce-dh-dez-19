FROM php:7.2-apache

RUN apt-get update \
 && docker-php-ext-install pdo pdo_mysql \