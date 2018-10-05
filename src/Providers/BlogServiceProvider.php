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
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'blog');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'blog');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'litecms.blog');

        // Bind facade
        $this->app->bind('litecms.blog', function ($app) {
            return $this->app->make('Litecms\Blog\Blog');
        });

        // Bind Category to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\CategoryRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\CategoryRepository::class
        );
        // Bind Blog to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\BlogRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\BlogRepository::class
        );
        // Bind Comment to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\CommentRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\CommentRepository::class
        );
        // Bind Tag to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\TagRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\TagRepository::class
        );

        $this->app->register(\Litecms\Blog\Providers\AuthServiceProvider::class);

        $this->app->register(\Litecms\Blog\Providers\RouteServiceProvider::class);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['litecms.blog'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('litecms/blog.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/blog')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/blog')], 'lang');
        // Publish storage files
        $this->publishes([__DIR__ . '/../../storage' => base_path('storage')], 'storage');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
