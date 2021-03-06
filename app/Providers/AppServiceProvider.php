<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env( 'APP_DEBUG' ))
        {
            $this->app->register( 'Barryvdh\Debugbar\ServiceProvider');
            $this->app->register( 'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider');
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }

    }
}
