<p align="center">API Throttling</p>



## Introduction

The framework used for this project is Laravel, version 8. All database migrations are added. Two ways of throttling is added.

1. Throttling configurations added to environment file. API_RATE_PER_SEC is the key for that. RouteServiceProvider - this is the file that is used to set the configuration. 
2. Throttling using the db field from users table.


## Steps for deployment

- Clone repo
- composer install
- create database and update in .env file
- php artisan migrate
- for creating a dummy user, an endpoint is provided, and the API token will be returned for using user based api throttling(/create-dummy-user)


## Endpoints

1. Default api index with throtling from environment file(/api/index)
2. Api for checking throttling from users DB field(/api/auth/user)
3. Dummy user creating URL(/create-dummy-user)

