#!/bin/bash
set -e

echo "Reset cache..."
php artisan config:cache

echo "Running migrations..."
php artisan migrate --force

echo "Starting Swoole..."
php artisan octane:start --server=swoole --port=8082 --host=0.0.0.0
