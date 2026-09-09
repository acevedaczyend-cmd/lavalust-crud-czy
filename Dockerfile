FROM php:8.2-apache

# Install PDO MySQL extension for LavaLust DB connection
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache Rewrite Module for LavaLust routing
RUN a2enmod rewrite

# Copy project files into Apache web directory
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html