#!/usr/bin/sh

set +e

if [ -f .env ]; then
    echo "Skipping initialization (.env file exists)"
    exit 0
fi

cp .env.example .env
echo "Created .env using .env.example"

alias artisan='php /var/www/html/artisan'

artisan key:generate

artisan migrate:fresh --force
artisan udemo:factory
