# Используйте официальный образ PHP-FPM
FROM php:8.2-fpm

# Установите необходимые зависимости
RUN apt-get update && apt-get install -y libpq-dev

# Установите необходимые расширения PHP
RUN docker-php-ext-install pdo pdo_pgsql

# Установите Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установите Node.js и NPM
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get update && apt-get install -y nodejs

# Установите дополнительные инструменты
RUN apt-get update && apt-get install -y zip unzip

WORKDIR /var/www/html
