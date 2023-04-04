FROM php:8.1-fpm-buster

RUN apt-get update && apt-get install git libzip-dev -y

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer


RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-install opcache zip
RUN pecl install apcu && docker-php-ext-enable apcu


WORKDIR /code

