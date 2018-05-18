<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::share('navigations', [
            'workspaces' => [
                'name' => 'Workspaces',
                'icon' => 'icon-xxx',
                'child' => [
                    'workspaces.index' => 'List Workspaces',
                    'workspaces.create' => 'Add Workspace'
                ]
            ],
            'roles' => [
                'name' => 'Roles',
                'icon' => 'icon-xxx',
                'child' => [
                    'roles.index' => 'List Roles',
                    'roles.create' => 'Add Role'
                ]
            ],
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
