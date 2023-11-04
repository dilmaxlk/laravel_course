<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // view::share('country', 'Sri Lanka');
        // view::share('city', 'Colombo');

        //if you need more views you can add a array
        // view::share([
        //     'country' => 'Sri Lanka',
        //     'city' => 'Colombo'
        // ]);


        //In above code. country and city will work for all the views, but now we want to
        //add data to specific views only.

        
        view::composer(['home','about'], function($view){
            $view->with('country', 'Sri Lanka');
            $view->with('city', 'Colombo');
        });

    }
}
