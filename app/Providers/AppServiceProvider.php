<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         // load sidebar and pass query
        view()->composer('frontEnd.includes.sidebar', function ($view) {

            $view->with('populars',\App\post::populars()); //categories() fun that created post model
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
