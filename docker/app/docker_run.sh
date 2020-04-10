#!/usr/bin/env bash
## Wait for DB container to be up

until nc -z -v -w30 $DB_HOST $DB_PORT
do
  echo "Waiting a second until the database is receiving connections..."
  # wait for a second before checking again
  sleep 5
done

yes | php /app/artisan key:generate
yes | php /app/artisan config:cache
yes | php /app/artisan migrate

php /app/artisan serve --host=0.0.0.0 --port=9000
