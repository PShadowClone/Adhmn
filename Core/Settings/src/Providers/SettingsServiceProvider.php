<?php

namespace Core\Settings\Providers;

use Core\Settings\Interfaces\SliderInterface;
use Core\Settings\Repository\SliderRepository;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{

    // route base path for the package
    private $routeBasePath = __DIR__ . '/../routes/';

    public function boot()
    {
        // publish package's routes
        $this->loadRoutesFrom($this->routeBasePath . 'web.php');
        //public packages resources
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Settings');
        //public packages migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');
        // load package's translation files
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'Settings');
        // public package's configurations
        $this->publishes([
            __DIR__ . '/../Config/SettingsConfig.php' => config_path('SettingsConfig.php'),
        ]);
        // publish package's api routes
        $this->mapApiRoutes();
        /*
         * bind slider's interface with slider repository
         * @author Amr
         */
        $this->app->singleton(SliderInterface::class, SliderRepository::class);
    }


    public function register()
    {

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->group($this->routeBasePath . 'api.php');
    }

}