FROM php:8.3-cli

# Installer les dépendances nécessaires
RUN apt-get update && apt-get install -y \
    git unzip zip curl libicu-dev libzip-dev \
    && docker-php-ext-install intl zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY . /app

RUN composer install

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
