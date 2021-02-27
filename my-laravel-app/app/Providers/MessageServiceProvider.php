<?php

namespace App\Providers;



use Illuminate\Support\ServiceProvider;

class MessageServiceProvider extends ServiceProvider{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        View::composer(
            'welcome', 'App\Http\Composers\MessageComposer'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){
        //
    }
}
