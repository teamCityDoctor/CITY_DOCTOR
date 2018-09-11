# City Doctor
live website: http://h43-city-doctor.bbvsvsvsv.com/       
City Doctor is a doctors portals which will help user to find nearest hospital and doctor quicker. Due to it's intuitive navigation features people can easily use this application. User can search doctor by their locality, city and doctor name
<img src="https://raw.githubusercontent.com/poloey/city-doctor/master/website.png" alt="">


# Technology
#### #frontend 
* Bootstrap 4
* Vue js 2.*

#### #Backend 
* Laravel 5.5

# How to run this project

#### First clone project from github and cd into this project inside terminal

~~~bash
git clone https://github.com/poloey/city-doctor.git
cd city-doctor
~~~

#### Downloading npm packages
~~~bash
npm install
~~~

#### Building npm bundle for vue
~~~bash
npm run prod
~~~

#### Downloading composer package  and dumping
~~~bash
composer install
composer dump-autoload
~~~

#### Configure project
~~~php
php artisan cache:clear
php artisan config:cache
php artisan key:generate
~~~
### Create a database name with `doctor` do migration with seeding
~~~bash
php artisan migrate --seed
~~~
It will take about a minute due to seeding.

### Serving laravel project
~~~
php artisan serve
~~~


### login user:
* sumon@gmail.com     
* sarwar@gmail.com     
* mojibur@gmail.com     
* tanim@gmail.com     
* riaz@gmail.com     

##  password for all user: 
`secret`      

You can register new user and you can manage hospital, doctor information by login to dashboard.     
Take care     





