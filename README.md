# L5Starter\Core

## Installation

In order to install Laravel 5, just add

``` php
"l5starter/core": "5.4.x-dev"
```
to your composer.json. Then run `composer install` or `composer update`.

Then in your `config/app.php` add in `providers`

``` php
Prettus\Repository\Providers\RepositoryServiceProvider::class,
Laracasts\Flash\FlashServiceProvider::class,
Collective\Html\HtmlServiceProvider::class,
L5Starter\Core\CoreServiceProvider::class,
```
and add in `aliases`

``` php
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
'Flash' => Laracasts\Flash\Flash::class,
```

Publish Configuration

``` bash
$ php artisan vendor:publish --provider="L5Starter\Core\CoreServiceProvider"
```

Running Authentication Quickstart

``` bash
$ php artisan make:auth
```

Running Migrations

``` bash
$ php artisan migrate
```
