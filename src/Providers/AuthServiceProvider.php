<?php

namespace Litecms\Blog\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Blog policy
        \Litecms\Blog\Repositories\Eloquent\BlogRepository::class 
        => \Litecms\Blog\Policies\BlogPolicy::class,// Bind Category policy
        \Litecms\Blog\Repositories\Eloquent\CategoryRepository::class 
        => \Litecms\Blog\Policies\CategoryPolicy::class,// Bind Tag policy
        \Litecms\Blog\Repositories\Eloquent\TagRepository::class 
        => \Litecms\Blog\Policies\TagPolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
