#!/bin/sh
cd /app
touch /app/storage/logs/laravel.log
chmod -R 777 storage/

if [ ! -f .env ]; then
    cp .env.example .env
fi

composer install --no-interaction

chmod -R 777 vendor/
chmod 777 composer.lock

php artisan migrate:fresh --seed

npm install
npm run build