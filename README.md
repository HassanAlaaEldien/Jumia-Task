<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Bus-booking system
## Prerequisite Before Initialization

- You should ensure that your web server has the following minimum PHP version and extensions:
  - PHP >= 8.0
  - BCMath PHP Extension
  - Ctype PHP Extension
  - cURL PHP Extension
  - DOM PHP Extension
  - Fileinfo PHP Extension
  - JSON PHP Extension
  - Mbstring PHP Extension
  - OpenSSL PHP Extension
  - PCRE PHP Extension
  - PDO PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension


## Installation Steps

- create new database.
- copy .env.example to .env and change database name to once you just created, also change user credentials.
- now you have to run =>  composer install  <=
- after that please run =>   php artisan key:generate   <=
- then you need to run =>  php artisan migrate   <=
- then generate JWT secret key by running =>  php artisan jwt:secret   <=
- finally, you have to initialize our app by seeding the database with fake data by running this command => php artisan app:setup  <= * HINT: it's one time run script * 

## Application Testing Steps

- Database dump with proper data to be tested included in project files. 
- Postman collection included in project files, or you can open this sharable link to import collection and try the app
  - https://www.getpostman.com/collections/ea28d5a41409ebf328c1
- Project get initialized with these cities to try [1 => 'Cairo',2 => 'Giza',3 => 'AlFayyum',4 => 'AlMinya']
- You have to send city id as ( starting_point || ending_point ) to see available lines.
- also, there's one line initialized with project [ 1 => 'Cairo => AlMinya'] with 4 seats (we can set num of seats for each line from DB) only to be booked.
- finally, if you have any questions please don't hesitate to contact me.

