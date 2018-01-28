FROM php:5.6.33-apache
RUN docker-php-ext-install mysql
COPY ./WorkSpaceJKPG /var/www/html
