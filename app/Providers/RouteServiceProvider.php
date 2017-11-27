<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapPhotopackageRoutes();

        $this->mapDivepackageRoutes();

        $this->mapAdminRoutes();

        $this->mapExtranetRoutes();

        //
    }

    /**
     * Define the "extranet" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapExtranetRoutes()
    {
        Route::group([
            'middleware' => ['web', 'extranet', 'auth:extranet'],
            'prefix' => 'extranet',
            'as' => 'extranet.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/extranet.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
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
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapAdminRoutes() {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin'], //you need to add the last middleware to array to fix it (version < v.1.0.6)
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    protected function mapDivepackageRoutes() {
        Route::group([
            'middleware' => ['web', 'divepackage', 'auth:divepackage'], //you need to add the last middleware to array to fix it (version < v.1.0.6)
            'prefix' => 'divepackage',
            'as' => 'divepackage.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/divepackage.php');
        });
    }

    protected function mapPhotopackageRoutes() {
        Route::group([
            'middleware' => ['web', 'photopackage', 'auth:photopackage'], //you need to add the last middleware to array to fix it (version < v.1.0.6)
            'prefix' => 'photopackage',
            'as' => 'photopackage.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/photopackage.php');
        });
    }
}
