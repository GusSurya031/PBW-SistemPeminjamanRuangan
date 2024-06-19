<?php

namespace App\Providers;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function boot()
    {
        $this->app['router']->aliasMiddleware('admin', \App\Http\Middleware\AdminAuth::class);
    }
}
