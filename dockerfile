FROM php:8.0-apache

# Copy the content of the current directory to /var/www/html in the container
COPY . /var/www/html

# Expose port 80 to allow connections to the Apache server
EXPOSE 80

# Install the mysqli extension for PHP
RUN docker-php-ext-install mysqli

# Start Apache in the foreground
CMD ["apache2-foreground"]
