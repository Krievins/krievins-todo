## Setup Guide

 - composer install
 - npm install
 - cp .env.example .env 
 - php artisan key:generate

 Go to Env file in repository and add your DB information

 After you're conected to DB, run migrations

 - php artisan migrate

 After everything should be fine, write php artisan serve to start local server

 - php artisan serve