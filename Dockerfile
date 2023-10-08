# Use the php:7.4-apache base image
FROM php:7.4-apache

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Change ownership of the /var/www directory to www-data (the Apache user)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
