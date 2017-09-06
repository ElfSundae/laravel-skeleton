<?php

namespace :namespace;

use Illuminate\Support\ServiceProvider;

class :package_serviceServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

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
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/:package_name.php', ':package_name');

        if ($this->app->runningInConsole()) {
            $this->registerForConsole();
        }
    }

    /**
     * Register for console.
     *
     * @return void
     */
    protected function registerForConsole()
    {
        $this->publishes([
            __DIR__.'/../config/:package_name.php' => config_path(':package_name.php'),
        ], ':package_name');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [];
    }
}
