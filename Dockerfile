FROM php:8.1.1-apache
COPY index.php /var/www/html
RUN docker-php-ext-install mysqli
RUN chmod -R 774 /var/www/html
RUN chown -R www-data:www-data /var/www/html
