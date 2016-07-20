<?php

namespace Litecms\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../../../resources/views', 'blog');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../../../resources/lang', 'blog');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__ . '/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('blog', function ($app) {
            return $this->app->make('Litecms\Blog\Blog');
        });

// Bind Blog to repository
        $this->app->bind(
            \Litecms\Blog\Interfaces\BlogRepositoryInterface::class,
            \Litecms\Blog\Repositories\Eloquent\BlogRepository::class
        );
        // Bind Category to repository
        $this->app->bind(
            \Litecms\Blog\Interfaces\CategoryRepositoryInterface::class,
            \Litecms\Blog\Repositories\Eloquent\CategoryRepository::class
        );

        $this->app->register(\Litecms\Blog\Providers\AuthServiceProvider::class);
        $this->app->register(\Litecms\Blog\Providers\EventServiceProvider::class);
        $this->app->register(\Litecms\Blog\Providers\RouteServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['blog'];
    }



    /** 
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../../../config/config.php' => config_path('package/blog.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../../../resources/views' => base_path('resources/views/vendor/blog')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../../../resources/lang' => base_path('resources/lang/vendor/blog')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__ . '/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__ . '/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');

        // Publish public
        $this->publishes([__DIR__ . '/../../../../public/' => public_path('/')], 'uploads');
    }
}
