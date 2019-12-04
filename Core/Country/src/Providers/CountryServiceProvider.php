<?php

namespace Core\Country\Providers;

use Core\Country\Interfaces\CountryInterface;
use Core\Country\Repository\CountryRepository;
use Illuminate\Support\Facades\Route;
use \Illuminate\Support\ServiceProvider;

class CountryServiceProvider extends ServiceProvider
{

    // route base path for the package
    private $routeBasePath = __DIR__ . '/../routes/';

    public function boot()
    {
        // publish package's routes
        $this->loadRoutesFrom($this->routeBasePath . 'web.php');
        //public packages resources
        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'Country');
        //public packages migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');
        // load package's translation files
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'Country');
        // public package's configurations
        $this->publishes([
            __DIR__ . '/../Config/CountryConfig.php' => config_path('CountryConfig.php'),
        ]);
        // publish package's api routes
        $this->mapApiRoutes();

        $this->app->singleton(CountryInterface::class, CountryRepository::class); // bind the CountryInterface with CountryRepository
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