<?php

namespace Panoscape\Laraflow;

use Illuminate\Support\ServiceProvider;
use Panoscape\Laraflow\Console\Commands;

class LaraflowServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/laraflow.php' => config_path('laraflow.php')
        ], 'config');

        if($this->app->runningInConsole()) {
            $this->commands([
                Commands\Log::class,
            ]);
        }
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/laraflow.php', 'laraflow');
    }
}