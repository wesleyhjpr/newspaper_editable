# newspaper_editable
## Project Details:

### Requirements:

- PHP >= 7.1.3
- MySql.
- composer.

### Project Setup:

- in the project root run this command.

```
root@root:/root_project$ composer install
```
- Configuring the Database.

The database connection information is stored as an environment variable called ```DB_DATABASE - DB_USERNAME - DB_PASSWORD```. For development, you can find and customize this inside ```.env```:

you can use this file "root_project\ .env.example" rename file to ".env"
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
"root_project\database\dump_newspaper.sql" 
```
- To generate Application Key:
```
root@root:/root_project$ php artisan key:generate 
```
- To start the server, run:
```
root@root:/root_project$ php artisan serve
```
now we have the app running on ``` http://127.0.0.1:8000/ ```

- To edit the text, you need to sign in.
```
user: admin@admin.com
password: 123456
```
Done!