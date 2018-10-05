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
        // Bind Category policy
        'Litecms\Blog\Models\Category' => \Litecms\Blog\Policies\CategoryPolicy::class,
// Bind Blog policy
        'Litecms\Blog\Models\Blog' => \Litecms\Blog\Policies\BlogPolicy::class,
// Bind Comment policy
        'Litecms\Blog\Models\Comment' => \Litecms\Blog\Policies\CommentPolicy::class,
// Bind Tag policy
        'Litecms\Blog\Models\Tag' => \Litecms\Blog\Policies\TagPolicy::class,
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
