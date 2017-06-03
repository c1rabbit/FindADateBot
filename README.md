# Find a Date Bot

Works with MyPolly Bot

# Optimal Environment

* php 5.6+
* MySQL 5.7
* [composer](https://getcomposer.org)

# Setup
* create MySQL database named `find_a_date_bot`
* rename `.env.example` to `.env` and fill out appropiate config settings
* generate new application key `php artisan key:generate`
* generate database models `php artisian migrate`
* start server `php artisan serve`

# API

get 10 random profiles:
`GET http://34.208.35.165/index.php/profiles`

@return JSONArray

store new profile:
`GET http://34.208.35.165/index.php/profile/store`

@param String name, String location, Char gender, int age

@return JSONObject

get 1 profile by profile_id:
`GET http://34.208.35.165/index.php/profile/show/{profile_id}`

@param String profile_id

@return JSONObject

built using Laravel Framework
