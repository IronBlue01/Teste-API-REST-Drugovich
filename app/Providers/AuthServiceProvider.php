<?php

namespace App\Providers;

use App\Models\Manager;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('accept-manager-admin', function ($user){
            $manager = new Manager;
            return $manager->managerIsAdmin();
        });
    }
}
