#  composer dump-autoload
# php artisan migrate:fresh --drop-views --database=mysql_local --path=database/migrations/main_db

# php artisan db:seed --database=mysql_local

 php artisan migrate:fresh --drop-views --database=mysql_migration

php artisan db:seed --database=mysql_migration


# php artisan migrate:fresh --database=mysql_migration --path=database/migrations/main_db
