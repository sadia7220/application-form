## A Basic Application Form Using Laravel

This is a basic application form where guest users are able to submit applications by providing his/her name, email and phone information. Admin/authenticated users can view the list of all the applications submitted by the guest users after logged in their account. 
(In this version a guest user can submit multiple applictions as nothing about the restrictions was mentioned in the requirements.)

##

Laravel Framework v7.28.4
PHP v7.4.9 

## Usage

Step 1: Clone the repository. 
    git clone https://github.com/sadia7220/application-form.git

Step 2: Go into the application-form directory.
    cd application-form

Step 3: Copy .env.example file to .env .
    cp .env.example .env

Step 4: Add database information in "DB_DATABASE", "DB_USERNAME" and "DB_PASSWORD" variables of .env file.

Step 5: Install all the app dependencies.
    composer install
    composer dumpautoload -o

Step 6: Generate the application key which will be auto updated in .env file.
    php artisan key:generate

Step 7: Clear the configuration cache.
    php artisan config:cache

Step 8: Migrate database along with seeder (as it has seeded data of registered user).
    php artisan migrate --seed

Step 9: Start the server
    php artisan serve
(If in other port, not in port=8000 then run the command below with port number. For example, for port number 8088)
    php artisan serve --port=8088

Step 10: Launch the main URL http://127.0.0.1:8000/ in browser. 
(or for port number 8088 the URL will be http://127.0.0.1:8088/)  

Step 11: For login use the credentials given below.
    E-Mail Address: admin@gmail.com
    Password: 12345678


