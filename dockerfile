FROM php:apache
COPY . /var/www/html
EXPOSE 36
RUN  docker-php-ext-install mysqli
CMD ["apache2-foreground"]