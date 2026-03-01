# Use official PHP 8.2 image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    curl \
    npm \
    nodejs

# Enable PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring zip

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node and build assets
RUN npm install && npm run build

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]