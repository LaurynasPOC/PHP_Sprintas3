# Employees Manager
## Features

* Read data from database;
* Add employee or position his works;
* Update employee or positiions data;
* Delete unnecessary data.

## Usage

1. Clone https://github.com/LaurynasPOC/PHP_Sprintas3.git this repository.
2. Set database parameters witch are located at bootstrap.php file.
3. This app requires PHP Doctrine ORM and it should be installed before using this app;
4. All data have to be placed to 'PHP_Sprintas3' folder before using.
5. Import sprintas3.sql file to your SQL app.
6. Open CMD on 'PHP_Sprintas3' folder and execute "vendor\bin\doctrine orm:schema-tool:update --force --dump-sql" (if you are using windows) or 
vendor/bin/doctrine orm:schema-tool:update --force --dump-sql (if you are using git bash / mac / linux terminals).
7. Open app at http://localhost/PHP_Sprintas3/ in your browser.


