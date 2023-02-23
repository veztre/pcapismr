<?php

namespace App\Providers;

use App\Models\Region;
use Illuminate\Support\ServiceProvider;

class DynamicRegion extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view){
            $view->with('regionn', Region::all());
        });
    }
}
