from php:8.1-apache

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y \
libpq-dev \
&& doctor-php-ext-install pdo pdo-pgsql pgsql

COPY . /var/www/html/

EXPOSE 80