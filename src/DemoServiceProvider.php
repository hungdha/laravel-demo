<?php

namespace Websanova\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('websanova-demo', function() {
            return new Demo;
        });
    }

    public function boot()
    {
        require __DIR__ . '/Http/routes.php';

	    $this->loadViewsFrom(__DIR__ . '/views', 'websanova-demo');
    }
}
