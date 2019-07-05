[![Build Status](https://travis-ci.org/hoyvoy/laravel-cross-database-subqueries.svg?branch=master)](https://travis-ci.org/hoyvoy/laravel-cross-database-subqueries) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/5ef152edf13d4440a9ccacf942bbecf9)](https://www.codacy.com/app/mario-hoyvoy/laravel-cross-database-subqueries?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=hoyvoy/laravel-cross-database-subqueries&amp;utm_campaign=Badge_Grade) [![StyleCI](https://styleci.io/repos/120466504/shield?branch=master)](https://styleci.io/repos/120466504)

# Laravel Cross database subqueries
Eloquent cross database compatibility in subqueries.

| **Laravel**  |  **laravel-cross-database-subqueries** |  **Lifecycle** |
|---|---|---|
| ^5.5  | ^5.5  | January 24, 2017 |
||| Bug fixes until January 2019 |
||| Security fixes until June 2020 |
| ^5.6  | ^5.6  | February 7, 2018 |
||| 6 months of bug fixes |
||| 1 year of security |

# Why do I need it?
### To use the following Eloquent methods cross databases:
* has
* whereHas
* doesntHave 
* whereDoesntHave
* withCount (except with prefixes)

# Installation
Install with composer
~~~
composer require nainlobato/laravel-cross-db-sq
~~~

From Laravel 5.5 onwards, it's possible to take advantage of auto-discovery of the service provider.
For Laravel versions before 5.5, you must register the service provider in your config/app.php

~~~
NainLobato\CrossDatabase\CrossDatabaseServiceProvider::class,
~~~

# Usage
In your `Models` extends from:
* NainLobato\CrossDatabase\Eloquent\Model

# Supported PHP Versions
* \>=7.0

# Supported Databases
* MySQL
* PostgreSQL
* SQL Server

# Issues & Contributing
If you find an issue please report it or contribute by submitting a pull request.

# Acknowledgement
This library is an updated version of the [laravel-cross-database-subqueries](https://github.com/hoyvoy/laravel-cross-database-subqueries) library created by [hoyvoy](https://github.com/hoyvoy). Thank you