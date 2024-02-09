FROM php:8.0-apache

# Copy PHP files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Expose port
EXPOSE 80


