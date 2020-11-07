FROM php:7.4-fpm

MAINTAINER kennynguyeenx@gmail.com

RUN apt-get update -y && apt-get clean

RUN apt-get install -y zlib1g-dev libicu-dev g++ zip unzip && rm -rf /var/lib/apt/lists/*

ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0" \
    PHP_OPCACHE_MAX_ACCELERATED_FILES="10000" \
    PHP_OPCACHE_MEMORY_CONSUMPTION="192" \
    PHP_OPCACHE_MAX_WASTED_PERCENTAGE="10"

# Install addition php ext
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli opcache pdo_mysql \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && pecl install apcu \
    && docker-php-ext-enable apcu

COPY ./.docker/php-fpm/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
COPY ./.docker/php-fpm/apcu.ini /usr/local/etc/php/conf.d/apcu.ini
COPY ./.docker/php-fpm/redis.ini /usr/local/etc/php/conf.d/redis.ini

WORKDIR /var/www

USER root

# Clean up
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
    rm /var/log/lastlog /var/log/faillog

ARG PUID=10000
ENV PUID ${PUID}
ARG PGID=10000
ENV PGID ${PGID}

RUN groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data

COPY --chown=www-data:www-data . /var/www

CMD ["php-fpm"]

EXPOSE 9000