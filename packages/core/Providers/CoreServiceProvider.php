<?php

namespace Core\Providers;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {

        parent::boot($router);
        $this->setupRoutes($this->app->router);

        $this->loadViewsFrom(realpath(__DIR__.'/../Resources/views'), 'core');

        $this->loadTranslationsFrom(realpath(__DIR__.'/../Resources/langs'), 'core');

        $this->publishes([
                __DIR__.'/../Config/packageConfig.php' => config_path('core/packageConfig.php'),
        ]);

        app('router')->middleware('checkInstallation', '\Core\Middleware\checkInstallation');
    }

    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {
            $this->publishes([
                __DIR__.'/../Resources/assets' => public_path('assets'),
            ]);
    }


    /**
     * Define the routes for the package.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Core\Controllers', 'as' => 'CoreRoutes::'], function($router)
        {
            
                require __DIR__.'/../Config/routes.php';
        
        });
    }

}
