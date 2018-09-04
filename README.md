# newspaper_editable
## Project Details:

### Requirements:

- PHP >= 7.1.3
- MySql.
- composer.

### Project Setup:

- in the project root run this command.

```
$ composer install
```
- Configuring the Database.

The database connection information is stored as an environment variable called ```DB_DATABASE - DB_USERNAME - DB_PASSWORD```. For development, you can find and customize this inside ```.env```:
```
# .env

# customize!
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newspaper
DB_USERNAME=root
DB_PASSWORD=
```
=> for database creation, dump this file into mysql.
```
"C:\..\..\newspaper_editable\database\dump_newspaper.sql" 
```
- To start the server, run:
```
$ php artisan serve
```
now we have the app running on ``` http://127.0.0.1:8000/ ```

- To edit the text, you need to sign in.
```
user: admin@admin.com
password: 123456
```
vouila!