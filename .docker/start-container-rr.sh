#!/bin/bash
set -e

echo "Starting RoadRunner..."
php artisan octane:start --server=roadrunner --port=8081 --host=0.0.0.0
