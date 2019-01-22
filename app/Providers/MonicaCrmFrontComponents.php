<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MonicaCrmFrontComponents extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.cardbox', 'cardbox');
        Blade::component('components.statistics.bage', 'bage');
        Blade::component('components.mainmenu', 'mainmenu');
        Blade::component('components.notifications', 'notifications');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
