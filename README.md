## A Basic Application Form Using Laravel

This is a basic application form where guest users are able to submit applications by providing his/her name, email and phone information. Admin/authenticated users can view the list of all the applications submitted by the guest users after logged in their account. 
(In this version a guest user can submit multiple applictions as nothing about the restrictions was mentioned in the requirements.)

## Versions Used

Laravel Framework v7.28.4<br>
PHP v7.4.9 

## Usage

Step 1: Clone the repository.

```shell script
git clone https://github.com/sadia7220/application-form.git
```

Step 2: Go into the application-form directory.

```shell script
cd application-form
```

Step 3: Copy .env.example file to .env .

```shell script
cp .env.example .env
```

Step 4: Add database information in "DB_DATABASE", "DB_USERNAME" and "DB_PASSWORD" variables of .env file.

Step 5: Install all the app dependencies.

```shell script
composer install
composer dumpautoload -o
```

Step 6: Generate the application key which will be auto updated in .env file.

```shell script
php artisan key:generate
```

Step 7: Clear the configuration cache.

```shell script
php artisan config:cache
```

Step 8: Start the server(WampServer\XAMPP) and check if all the services of the server is running.

Step 9: Migrate database along with seeder (as it has seeded data of registered user).

```shell script
php artisan migrate --seed
```

Step 10: Start the laravel development server

```shell script
php artisan serve
```

(or in case of starting the development server in different port, run the command below with port number. For example, for port number 8088)

```shell script
php artisan serve --port=8088
```

Step 11: Launch the main URL http://127.0.0.1:8000/ in browser.<br> 
(or for port number 8088 the URL will be http://127.0.0.1:8088/)  

Step 12: For login use the credentials given below.<br><br>
E-Mail Address: admin@gmail.com<br>
Password: 12345678


