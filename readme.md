
## System Requirement and Basic Technical Knowledge
- Web Server as:
  - Apache 2.4.x or higher with rewrite engine on (mod_rewrite)  
  - Nginx 1.11.x or higher
- Database that laravel supports, actually can be:
  - MySQL
  - Postgres
  - SQLite
  - SQL Server
- Composer
- Laravel 5.3.x or higher
- Php 5.6.x or higher and the extensions:
  - Mcrypt
  - OpenSSL
  - Mbstring
  - Tokenizer
  - FileInfo

## How To Install
1. Open the terminal, navigate to your project directory.
```php
$ git clone https://github.com/ryanariana6/HolaHalo-Katalogs.git
```

2. Setting the database configuration, open .env file at project root directory
```
DB_DATABASE=**your_db_name**
DB_USERNAME=**your_db_user**
DB_PASSWORD=**password**
```

4. Run the following command at the terminal
```php
$ php artisan serve
```

## Backend URL
```php
/admin/login
```
- default email : admin@admin.com
- default password : admin

