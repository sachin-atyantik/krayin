#!/bin/bash
set -e

echo "Starting Swoole..."
php artisan octane:start --server=swoole --port=8082 --host=0.0.0.0
