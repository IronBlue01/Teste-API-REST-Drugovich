<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    ClientRepositoryInterface,
    GroupRepositoryInterface,
    ManagerRepositoryInterface,
    UserRepositoryInterface
};
use App\Repositories\Core\Eloquent\{
    EloquentClientRepository,
    EloquentGroupRepository,
    EloquentManagerRepository,
    EloquentUserRepository
};
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            ClientRepositoryInterface::class,
            EloquentClientRepository::class
        );

        $this->app->bind(
            GroupRepositoryInterface::class,
            EloquentGroupRepository::class
        );

        $this->app->bind(
            ManagerRepositoryInterface::class,
            EloquentManagerRepository::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            EloquentUserRepository::class
        );
    }

    public function boot(): void
    {
        //
    }
}
