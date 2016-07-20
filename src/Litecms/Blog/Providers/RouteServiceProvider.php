<?php

namespace Litecms\Blog\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Litecms\Blog\Models\Blog;
use Request;

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
    public function boot(Router $router)
    {
        parent::boot($router);

        if (Request::is('*/blog/blog/*')) {
            $router->bind('blog', function ($id) {
                $blog = $this->app->make('\Litecms\Blog\Interfaces\BlogRepositoryInterface');
                return $blog->findorNew($id);
            });
        }

        if (Request::is('*/blog/category/*')) {
            $router->bind('category', function ($id) {
                $category = $this->app->make('\Litecms\Blog\Interfaces\CategoryRepositoryInterface');
                return $category->findorNew($id);
            });
        }

    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require __DIR__ . '/../Http/routes.php';
        });
    }

}
