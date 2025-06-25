# Use the official PHP image
FROM php:8.2-apache

# Copy your project files into the Apache root directory
COPY . /var/www/html/

# Enable Apache mod_rewrite (optional, for routing)
RUN a2enmod rewrite
