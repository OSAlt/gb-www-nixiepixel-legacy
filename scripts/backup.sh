#!/usr/bin/env bash 
 
PROJECT="$HOME/UPDATE_ME/"

if [ ! -f .env ]
then
        export $(sed -e '/^#/d' -e '/^$/d' $PROJECT/.env | xargs)
fi

FILE=$(date +"%Y%m%d_%H%M%S").sql
(cd $PROJECT; docker-compose exec nix_db  /usr/bin/mysqldump -u root --password="$MYSQL_ROOT_PASSWORD"  beaconbot  > $PROJECT/backups/$FILE && gzip $PROJECT/backups/$FILE )

echo "Removing backups older then 7 days"
find $PROJECT/ -iname "*.sql" -mtime +7  -exec rm -v {} \;
