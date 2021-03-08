<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class InfomationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind('Infomation','App\Services\Infomation');
        //
    }
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){
        View::composer(
            'infomation.index',function($view){
                $view->with('view_message','composer message!');
            }
        );        //
    }
    
}
