<p align="center"><h2>Web Service App for User - Bitpanda Task 2</h2></p>

## About the App

This app was made with Laravel by Alcides Ojeda

V 0.1  
Date: 16/02/2022

# REST API

The REST API to the example app is described below.

## Get Transactions from CSV or Database

-   .../transactions?source=db
-   .../transactions?source=csv

### Request

`GET /transactions?source=db`

    GET http://localhost:8000/transactions?source=db

### Response

    Transactions from source (csv or db)

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

```yaml
[
    {
        "id": 1,
        "code": "T_218_ljydmgebx",
        "amount": 8617.19,
        "user_id": 375,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 2,
        "code": "T_335_wmhrbjxld",
        "amount": 6502.72,
        "user_id": 1847,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 3,
        "code": "T_327_shqnyrctz",
        "amount": 101.26,
        "user_id": 3031,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 4,
        "code": "T_570_qtbdktdxn",
        "amount": 5032.74,
        "user_id": 5441,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 5,
        "code": "T_696_yruawfpis",
        "amount": 2710.4,
        "user_id": 6019,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 6,
        "code": "T_445_qxlmjdoas",
        "amount": 9062.91,
        "user_id": 948,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 7,
        "code": "T_836_ajvlpejea",
        "amount": 3112.48,
        "user_id": 4369,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
    {
        "id": 8,
        "code": "T_681_mefjlmzuz",
        "amount": 6282.17,
        "user_id": 3814,
        "created_at": "2020-01-19 16:08:59",
        "updated_at": "2020-01-19 16:08:59",
    },
]
```

## Installation in local Env.

-   Clone this Repository
-   Create Database bitpanda2 and user.
-   Add database info to the .env file.
-   Run composer `composer install` in the root folder of the app
-   Run `php artisan db:seed`
-   Run server with the command `php artisan serve`

NOTE:  
make sure to have the database dump files inside the database/seeders folder
csv files must be placed in the storage folder
