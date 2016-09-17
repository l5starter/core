# L5Start\Core

## Installation

In order to install Laravel 5, just add

``` php
"l5starter/core": "5.2.x-dev"
```
to your composer.json. Then run 'composer install' or 'composer update'.

Then in your 'config/app.php' add

``` php
php artisan vendor:publish --provider="L5Starter\Core\CoreServiceProvider"
```