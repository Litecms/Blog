<?php

namespace Litecms\Blog\Providers;

use Illuminate\Support\ServiceProvider;
use Litecms\Blog\Blog;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'blog');

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
        $this->mergeConfig();
        $this->registerFacade();
        $this->registerBindings();
        //$this->registerCommands();

        $this->app->register(\Litecms\Blog\Providers\AuthServiceProvider::class);
        $this->app->register(\Litecms\Blog\Providers\RouteServiceProvider::class);
        // $this->app->register(\Litecms\Blog\Providers\EventServiceProvider::class);
        // $this->app->register(\Litecms\Blog\Providers\WorkflowServiceProvider::class);
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade() {
        $this->app->bind('litecms.blog', function($app)
        {
            return $this->app->make(Blog::class);
        });
    }

    /**
     * Register the bindings for the service provider.
     *
     * @return void
     */
    public function registerBindings() {
        // Bind Blog to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\BlogRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\BlogRepository::class
        );        // Bind Category to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\CategoryRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\CategoryRepository::class
        );        // Bind Tag to repository
        $this->app->bind(
            'Litecms\Blog\Interfaces\TagRepositoryInterface',
            \Litecms\Blog\Repositories\Eloquent\TagRepository::class
        );
    }


    /**
     * Merges user's and blog's configs.
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php', 'litecms.blog'
        );
    }

    /**
     * Register scaffolding command
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Litecms\Blog\Commands\Blog::class,
            ]);
        }
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

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
