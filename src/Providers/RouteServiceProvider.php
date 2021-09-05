<?php

namespace Litecms\Blog\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Litecms\Blog\Models\Blog;

use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Litecms\Blog\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        if (Request::is('*/blog/blog/*')) {
            Route::bind('blog', function ($blog) {
                $blogRepo = $this->app->make('Litecms\Blog\Interfaces\BlogRepositoryInterface');
                return $blogRepo->findorNew($blog);
            });
        }
        if (Request::is('*/blog/category/*')) {
            Route::bind('category', function ($category) {
                $categoryRepo = $this->app->make('Litecms\Blog\Interfaces\CategoryRepositoryInterface');
                return $categoryRepo->findorNew($category);
            });
        }
        if (Request::is('*/blog/tag/*')) {
            Route::bind('tag', function ($tag) {
                $tagRepo = $this->app->make('Litecms\Blog\Interfaces\TagRepositoryInterface');
                return $tagRepo->findorNew($tag);
            });
        }

    }

    /**
     * Define the routes for the package.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();

        $this->mapApiRoutes();
    }

    /**
     * Define the "web" routes for the package.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {   
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
        ], function ($router) {
            require (__DIR__ . '/../../routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the package.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace'  => $this->namespace,
            'prefix'     => 'api',
        ], function ($router) {
            require (__DIR__ . '/../../routes/api.php');
        });
    }

}
