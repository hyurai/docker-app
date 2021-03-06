<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HellowServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind('hellow','app\Services\Hellow');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
