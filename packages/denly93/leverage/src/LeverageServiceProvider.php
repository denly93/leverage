<?php

namespace Denly93\Leverage;

use Illuminate\Support\ServiceProvider;

class LeverageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');

        $this->publishes([
            __DIR__.'/../config/leverage.php' => config_path('leverage.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Denly93\Leverage\Http\Controllers\DashboardController');
    }
}
