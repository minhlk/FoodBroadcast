<?php

namespace Backpack\Base;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Route;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(\Illuminate\Routing\Router $router)
    {
        // LOAD THE VIEWS
        // - first the published views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/vendor/backpack/base'), 'backpack');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'backpack');

        $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'backpack');

        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__.'/config/backpack/base.php', 'backpack.base'
        );

        $this->registerAdminMiddleware($this->app->router);
        $this->setupRoutes($this->app->router);
        $this->publishFiles();
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        Route::group(
        [
            'namespace'  => 'Backpack\Base\app\Http\Controllers',
            'middleware' => 'web',
            'prefix'     => config('backpack.base.route_prefix'),
        ],
        function () {
            // if not otherwise configured, setup the auth routes
            if (config('backpack.base.setup_auth_routes')) {
                Route::auth();
                Route::get('logout', 'Auth\LoginController@logout');
            }

            // if not otherwise configured, setup the dashboard routes
            if (config('backpack.base.setup_dashboard_routes')) {
                Route::get('dashboard', 'AdminController@dashboard');
                Route::get('/', 'AdminController@redirect');
            }
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // register the current package
        $this->app->bind('base', function ($app) {
            return new Base($app);
        });

        // register its dependencies
        $this->app->register(\Jenssegers\Date\DateServiceProvider::class);
        $this->app->register(\Prologue\Alerts\AlertsServiceProvider::class);

        // register their aliases
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Alert', \Prologue\Alerts\Facades\Alert::class);
        $loader->alias('Date', \Jenssegers\Date\Date::class);

        // register the services that are only used for development
        if ($this->app->environment() == 'local') {
            if (class_exists('Laracasts\Generators\GeneratorsServiceProvider')) {
                $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
            }
            if (class_exists('Backpack\Generators\GeneratorsServiceProvider')) {
                $this->app->register('Backpack\Generators\GeneratorsServiceProvider');
            }
        }
    }

    public function registerAdminMiddleware(Router $router)
    {
        // in Laravel 5.4
        if (method_exists($router, 'aliasMiddleware')) {
            Route::aliasMiddleware('admin', \Backpack\Base\app\Http\Middleware\Admin::class);
        }
        // in Laravel 5.3 and below
        else {
            Route::middleware('admin', \Backpack\Base\app\Http\Middleware\Admin::class);
        }
    }

    public function publishFiles()
    {
        // publish config file
        $this->publishes([__DIR__.'/config' => config_path()], 'config');

        // publish lang files
        // $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/backpack')], 'lang');

        // publish views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/vendor/backpack/base')], 'views');

        // publish error views
        $this->publishes([__DIR__.'/resources/error_views' => resource_path('views/errors')], 'errors');

        // publish public Backpack assets
        $this->publishes([__DIR__.'/public' => public_path('vendor/backpack')], 'public');

        // publish public AdminLTE assets
        $this->publishes([base_path('vendor/almasaeed2010/adminlte') => public_path('vendor/adminlte')], 'adminlte');
    }
}
