<?php

namespace BabatopeOni\MockPackage;

use Illuminate\Support\ServiceProvider;

class MockPackageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'babatopeoni');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'babatopeoni');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/mockpackage.php' => config_path('mockpackage.php'),
            ], 'mockpackage.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/babatopeoni'),
            ], 'mockpackage.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/babatopeoni'),
            ], 'mockpackage.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/babatopeoni'),
            ], 'mockpackage.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/mockpackage.php', 'mockpackage');

        // Register the service the package provides.
        $this->app->singleton('mockpackage', function ($app) {
            return new MockPackage;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['mockpackage'];
    }
}