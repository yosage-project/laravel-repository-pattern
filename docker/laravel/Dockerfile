FROM php:8.2-fpm

RUN apt update
RUN apt install -y zip unzip libcairo2-dev libzip-dev default-mysql-client

RUN docker-php-ext-install pdo_mysql zip

# composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# node
RUN apt install -y nodejs npm
RUN npm install -g n
RUN n 18
RUN npm install -g yarn

# port
EXPOSE 5173
