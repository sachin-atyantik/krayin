#!/bin/bash
set -e

echo "Reset cache..."
php artisan config:cache

echo "Running migrations..."
php artisan migrate --force

echo "Starting RoadRunner..."
php artisan octane:start --server=roadrunner --port=8081 --host=0.0.0.0
