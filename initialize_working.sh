#!/usr/bin/env bash

composer update

composer install

php artisan migrate --force

php artisan storage:link

php artisan key:generate

php artisan serve
