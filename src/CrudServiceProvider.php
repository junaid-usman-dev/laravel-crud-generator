<?php

namespace Junaid\Crud;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot ()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','crud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register ()
    {
        
    }
}