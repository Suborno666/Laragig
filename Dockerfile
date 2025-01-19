FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Image config
ENV SKIP_COMPOSER 0
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Database config
ENV DB_CONNECTION mysql
ENV DB_HOST bpu55jwtnjsibxgvi6pp-mysql.services.clever-cloud.com
ENV DB_DATABASE bpu55jwtnjsibxgvi6pp
ENV DB_USERNAME uykcylzrbuhhofr3
ENV DB_PASSWORD uVpNdeOFAa60nLdhJBQ2

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install dependencies
RUN composer install --no-interaction --no-dev --prefer-dist

# Generate application key
RUN php artisan key:generate --force

# Run migrations
RUN echo '#!/bin/sh\n\
php artisan migrate --force\n\
/start.sh' > /run.sh

RUN chmod +x /run.sh

CMD ["/run.sh"]