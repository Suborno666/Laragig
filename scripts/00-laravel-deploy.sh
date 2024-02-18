#!/usr/bin/env bash

# Remove the problematic line that installs hirak/prestissimo
# since it's no longer needed with Composer  2 and Laravel  8+

echo "Running composer"
composer install --ignore-platform-reqs

echo "generating application key..."
php artisan key:generate --show

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force
