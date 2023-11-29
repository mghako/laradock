# Use the official PHP base image with FPM support
FROM php:8.2-fpm

# Install necessary extensions
RUN docker-php-ext-install pdo_mysql opcache

WORKDIR /var/www/html

CMD ["php-fpm"]
