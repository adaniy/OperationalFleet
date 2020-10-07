<?php

namespace App\Providers;


use App\automjeti;
use App\karburanti;
use App\Policies\AutomjetiPolicy;
use App\Policies\KarburantPolicy;
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
        karburanti::class => KarburantPolicy::class,
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
        Passport::tokensExpireIn(Carbon::now()->addMonths(1));
        Passport::refreshTokensExpireIn(Carbon::now()->addMonths(6));

        Passport::tokensCan([
            'purchase-karburant' => 'Create a new Karburant for a specified automjet',
            'manage-karburant' => 'CRUD karburantet',
            'read-general' => 'Read general info like automjeti karburanti etc.',
            'dev' => 'everything',
            ]);
    }
}
