<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $admins = ["admin", "superadmin"];

        foreach (['admins','showBoisson', 'showIngredients', 'showRecette', 'showMonnayeur'] as $gateName) {
            Gate::define($gateName, function ($user) use ($admins) {
                return in_array($user->type, $admins);
            });
        }

        Gate::define('showVente', function ($user) {
            if ($user->type === 'user' or $user->type === 'admin' or $user->type === 'superadmin')
                return true;
        });

        Gate::define('showSuperAdminPage', function ($user) {
                return $user->type === 'superadmin';
        });


    }
}
