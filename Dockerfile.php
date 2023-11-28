#FOR LARAVEL

FROM php:8.1-fpm

WORKDIR /var/www/laradock

RUN docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port (not required, as this is an internal service)
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
