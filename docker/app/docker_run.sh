#!/usr/bin/env bash

function check_db() 
{
## Wait for DB container to be up

until nc -z -v -w30 $DB_HOST $DB_PORT
do
  echo "Waiting 5 second until the database is receiving connections..."
  # wait for a second before checking again
  sleep 5
done

}

function devel() 
{
  check_db
  ## Compiles SASS and any preprocessing
  ## Ideally this would compile the SCSS but that's broken...so....
  #npm run dev
  npm run watch &
  sleep 30
  bootstrap
}

function prod() 
{
  check_db
  npm run production
  bootstrap
}

function bootstrap()
{
  yes | php /app/artisan key:generate
  yes | php /app/artisan config:cache
  yes | php /app/artisan migrate

  php /app/artisan serve --host=0.0.0.0 --port=9000

}

if [ $# -gt 0 ]; then 
  echo "Running Dev Mode"
  devel
else
  echo "Running Proction Mode"
  prod
fi