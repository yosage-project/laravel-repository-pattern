<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // InterfaceとRepositoryの紐付け
        app()->bind(
            \App\Infrastructures\Interfaces\Item\IGetItemsRepository::class,
            \App\Infrastructures\Repositories\Eloquent\Item\GetItemsRepository::class
        );
    }
}
