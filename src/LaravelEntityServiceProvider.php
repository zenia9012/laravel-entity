<?php

namespace yevhenii\LaravelEntity;

use Illuminate\Support\ServiceProvider;
use Yevhenii\LaravelEntity\Commands\CreateEntity;
use yevhenii\LaravelEntity\Commands\CreateRepository;

class LaravelEntityServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'yevhenii');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'yevhenii');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelentity.php', 'laravelentity');

        // Register the service the package provides.
        $this->app->singleton('laravelentity', function ($app) {
            return new laravelEntity;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelentity'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelentity.php' => config_path('laravelentity.php'),
        ], 'laravelentity.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/yevhenii'),
        ], 'laravelentitynew.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/yevhenii'),
        ], 'laravelentitynew.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/yevhenii'),
        ], 'laravelentitynew.views');*/

        // Registering package commands.
         $this->commands([
             CreateRepository::class,
             CreateEntity::class,
         ]);
    }
}
