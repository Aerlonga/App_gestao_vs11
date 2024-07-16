# Use a imagem oficial do PHP
FROM php:8.1-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y libzip-dev unzip

# Instale extensões PHP
RUN docker-php-ext-install zip pdo pdo_mysql

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Defina o diretório de trabalho
WORKDIR /var/www

# Copie o código do projeto
COPY . .

# Instale as dependências do Laravel
RUN composer install
