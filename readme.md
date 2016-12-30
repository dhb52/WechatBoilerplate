# Install

- Clone it
- Install dependencies via composer
```
composer install
```
- Create dotenv file 
```
copy .env.example .env
php artisan key:generate
```
- Create database
```
CREATE DATABASE IF NOT EXISTS homestead DEFAULT CHARSET utf8 COLLATE utf8_general_ci;
CREATE USER 'homestead'@'localhost' IDENTIFIED BY 'secret';
GRANT ALL ON homestead.* TO 'homestead'@'localhost';
```
- Installing laravel-admin: migration and seeding
```
php artisan admin:install
```
# Laravel PHP Framework

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

# Laravel-Admin component
Laravel-Admin(https://github.com/z-song/laravel-admin)

# EasyWechat component
EasyWechat(https://github.com/overtrue/wechat)
