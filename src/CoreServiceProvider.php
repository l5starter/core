<?php

namespace L5Starter\Core;

use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'l5starter');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'l5starter');
        // Publishing File
        $this->publishes([__DIR__ . '/../public/assets' => public_path('/assets/adminLTE')], 'public');
        $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/l5starter')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
