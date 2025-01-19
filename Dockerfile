FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Image config
ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install dependencies
RUN composer install --no-interaction --no-dev --prefer-dist

# Create basic .env file
RUN cp .env.example .env

# Run migrations and start server
RUN echo '#!/bin/sh\n\
php artisan migrate --force\n\
/start.sh' > /run.sh

RUN chmod +x /run.sh

CMD ["/run.sh"]