<?php

namespace App\Providers;

use App\Repositories\PersoneliRepository;
use App\Repositories\PersoneliRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PersoneliRepositoryInterface::class,PersoneliRepository::class);
    }
}
