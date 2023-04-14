<?php

namespace Coupon\Code;

use Illuminate\Support\ServiceProvider;

class couponserviceprovider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->make('Coupon\Code\couponcontroller');
       $this->loadViewsFrom(__DIR__.'/views','Code');
         $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        include __DIR__.'/route.php';
    }
}
