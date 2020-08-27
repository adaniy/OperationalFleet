<?php

namespace App\Providers;


use App\automjeti;
use App\Policies\AutomjetiPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        automjeti::class => AutomjetiPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        Passport::tokensExpireIn(Carbon::now()->addDays(30));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));

        Passport::tokensCan([
            'purchase-karburant' => 'Create a new Karburant for a specified automjet',
            'manage-karburant' => 'CRUD karburantet',
            'manage-account' =>  'Read account data, if admin or not. Modify account data but not delete',
            'read-general' => 'Read general info like automjeti karburanti etc.',
            'dev' => 'everything',
            ]);
    }
}
