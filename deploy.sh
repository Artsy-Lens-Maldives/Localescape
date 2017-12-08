#!/bin/sh
git pull
composer install --optimize-autoloader
composer update
npm run production
php artisan migrate
php artisan optimize
php artisan cache:clear