FROM php:8.2-fpm

ARG user
ARG uid

# Системные
RUN apt-get update && apt-get install -y \
    git \
    curl \
	libzip-dev \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
	nodejs \
	npm

RUN curl -sSLf \
        -o /usr/local/bin/install-php-extensions \
        https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions @composer pdo_pgsql pgsql mbstring exif pcntl bcmath gd zip soap gd xdebug ldap

#COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user && \
    chown -R $user:$user /var/www

# Set working directory
WORKDIR /var/www

USER $user