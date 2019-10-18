# laravel-login-app
login system using laravel


## How to run the application

Copy `.env.example` to `.env` file

Edit database connection (username , password, database name)

Create database in DB.

### Run migrations

`php artisan migrate`

`php artisan db:seed`

This seed will insert mailID:  `nipun@kiebot.com` and password `123` in the db.

### Start the Application 

`php artisan serve`

Browse http://localhost:8000 and observe the login page. 


