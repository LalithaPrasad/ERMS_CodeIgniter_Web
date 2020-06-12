This is an implementation of Employee Record Management System using
PHP-CodeIgniter framework. The functionality is same as the other repositories
in this series.

To run the app you need to first create the database. Currently it is using
sqlite and the path to database file is given in
application/config/database.php. The database migration files are in
application/migrations. The migration versions are specified in
application/config/migration.php. You need to change the migration versions
appropriately to create the admin and employee tables. To actually migrate the
database, start the php server with the command

    php -S localhost:8000

and use the url 

    http://localhost:8000/migrate.

After migrating database tables you can access the app at the url

    http://localhost:8000

Good luck!
