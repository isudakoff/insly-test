FROM php:7.1-fpm

RUN usermod -u 1000 www-data

RUN apt-get update && \
    apt-get install -y \
        libmcrypt-dev \
        libmagickwand-dev \
        build-essential \
        curl \
        gnupg \
    --no-install-recommends && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN pecl install imagick && \
    docker-php-ext-install \
        gd \
        zip \
        bz2 \
        mcrypt && \
    docker-php-ext-enable \
        imagick \
        gd \
        zip \
        bz2

RUN chown -R www-data:www-data /var/www

USER www-data

WORKDIR /var/www