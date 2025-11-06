#!/bin/sh
set -e

HOST=${DB_HOST:-mysql}
PORT=${DB_PORT:-3306}

echo "⏳ Waiting for $HOST:$PORT to be ready..."

while ! nc -z "$HOST" "$PORT"; do
  sleep 2
done

echo "✅ $HOST:$PORT is available, running Laravel setup..."


# composer install --no-interaction

php artisan key:generate --force || true

php artisan migrate:fresh --seed || true

echo "🧹 Clearing config and app caches..."
php artisan config:clear
php artisan cache:clear
php artisan config:cache


echo "🚀 Starting Laravel on 0.0.0.0:8000"
php artisan serve --host=0.0.0.0 --port=8000