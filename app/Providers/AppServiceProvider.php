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
                'role' => ['Administrator'],
                'name' => 'Workspaces',
                'icon' => 'icon-xxx',
                'child' => [
                    'workspaces.index' => 'List Workspaces',
                    'workspaces.create' => 'Add Workspace'
                ]
            ],
            'sources' => [
                'role' => ['Administrator'],
                'name' => 'Sources',
                'icon' => 'icon-xxx',
                'child' => [
                    'sources.index' => 'List Sources',
                    'sources.create' => 'Add Source'
                ]
            ],
            'targets' => [
                'role' => ['Administrator', 'Manager'],
                'name' => 'Targets',
                'icon' => 'icon-xxx',
                'child' => [
                    'targets.index' => 'List Targets',
                    'targets.create' => 'Add Target'
                ]
            ],
            'links.index' => [
                'role' => ['Manager', 'Writer'],
                'name' => 'Links',
                'icon' => 'icon-xxx',
            ],
            'posts' => [
                'role' => ['Manager', 'Writer'],
                'name' => 'Posts',
                'icon' => 'icon-xxx',
                'child' => [
                    'posts.index' => 'List Posts',
                    'posts.create' => 'Add Post'
                ]
            ],
            'rules' => [
                'role' => ['Manager', 'Writer'],
                'name' => 'Rules',
                'icon' => 'icon-xxx',
                'child' => [
                    'rules.index' => 'List Rules',
                    'rules.create' => 'Add Rule'
                ]
            ],
            'settings' => [
                'role' => ['Writer'],
                'name' => 'Settings',
                'icon' => 'icon-xxx',
                'child' => [
                    'settings.targets.index' => 'Targets',
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
