<?php

namespace :namespace;

use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class :package_serviceServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishAssets();
        }
    }

    /**
     * Publish assets from package.
     *
     * @return void
     */
    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../config/:config_name.php' => base_path('config/:config_name.php'),
        ], ':package_name');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->setupAssets();
    }

    /**
     * Setup package assets.
     *
     * @return void
     */
    protected function setupAssets()
    {
        if ($this->app instanceof LumenApplication) {
            $this->app->configure(':config_name'); // @codeCoverageIgnore
        }

        $this->mergeConfigFrom(__DIR__.'/../config/:config_name.php', ':config_name');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
