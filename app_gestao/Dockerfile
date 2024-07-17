# Use a imagem oficial do PHP
FROM php:8.2-fpm

# Instale dependências do sistema
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    unixodbc-dev \
    gcc \
    g++ \
    make \
    && apt-get clean

# Instale extensões PHP
RUN docker-php-ext-install zip pdo pdo_mysql

# Instale a extensão pdo_sqlsrv via PECL
RUN pecl install pdo_sqlsrv \
    && docker-php-ext-enable pdo_sqlsrv

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Defina o diretório de trabalho
WORKDIR /var/www

# Copie o código do projeto
COPY . .

# Instale as dependências do Laravel
RUN composer install
