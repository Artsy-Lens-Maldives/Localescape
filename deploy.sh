#!/bin/sh
cd /var/www/html/Laravel
git fetch --all
git pull origin master
yarn run production