# Use the official PHP image with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy all project files into the container
COPY . /var/www/html/

# Enable Apache modules required for most PHP apps
RUN a2enmod rewrite headers

# Suppress Apache ServerName warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set recommended permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# (Optional) Set proper ownership and access for .htaccess usage
RUN chown www-data:www-data /var/www/html/.htaccess || true

# Expose the HTTP port
EXPOSE 80

# Start Apache in the foreground (default behavior)
CMD ["apache2-foreground"]
