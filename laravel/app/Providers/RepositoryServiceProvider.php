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
        // InterfaceとRepositoryの紐付け(Eloquent)
        app()->bind(
            \App\Infrastructures\Interfaces\Item\IGetItemsRepository::class,
            \App\Infrastructures\Repositories\Eloquent\Item\GetItemsRepository::class
        );

        // InterfaceとRepositoryの紐付け(MySql)
        /*app()->bind(
            \App\Infrastructures\Interfaces\Item\IGetItemsRepository::class,
            \App\Infrastructures\Repositories\MySql\Item\GetItemsRepository::class
        );*/

        // InterfaceとRepositoryの紐付け(Api)
        /*app()->bind(
            \App\Infrastructures\Interfaces\Item\IGetItemsRepository::class,
            \App\Infrastructures\Repositories\Api\Item\GetItemsRepository::class
        );*/
    }
}
