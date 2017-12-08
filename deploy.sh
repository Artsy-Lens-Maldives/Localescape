#!/bin/sh
cd /var/www/laravel/Localescape
git pull
composer install --optimize-autoloader
composer update
npm run production
php artisan migrate
php artisan optimize
php artisan route:optimize
php artisan cache:clear