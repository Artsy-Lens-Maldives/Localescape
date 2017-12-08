#!/bin/sh
cd /var/www/laravel/Localescape
git fetch --all
git pull origin master
composer install --optimize-autoloader
composer update
npm run production
php artisan migrate
php artisan optimize
php artisan route:optimize
php artisan cache:clear