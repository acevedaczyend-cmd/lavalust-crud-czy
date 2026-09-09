FROM php:8.2-apache

# Install PDO MySQL extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable Apache Rewrite Module
RUN a2enmod rewrite

# Copy all repository files into web root
COPY . /var/www/html/

# Set working directory to inner LavaLust folder if it exists
WORKDIR /var/www/html

# Adjust Apache DocumentRoot to point directly to LavaLust if present
RUN sed -i 's|/var/www/html|/var/www/html/LavaLust|g' /etc/apache2/sites-available/000-default.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html