<?php

namespace App\Providers;

use App\Observers\PersoneliObserver;
use App\Personeli;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Personeli::observe(PersoneliObserver::class);
    }
}
