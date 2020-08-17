#!/usr/bin/sh

set +e

alias artisan='php /var/www/html/artisan'

artisan migrate:fresh --force
artisan udemo:factory
