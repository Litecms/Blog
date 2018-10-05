<?php

namespace Litecms\Blog\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Blog\Models\Blog;

class BlogPolicy
{

    /**
     * Determine if the given user can view the blog.
     *
     * @param UserPolicy $user
     * @param Blog $blog
     *
     * @return bool
     */
    public function view(UserPolicy $user, Blog $blog)
    {
        if ($user->canDo('blog.blog.view') && $user->isAdmin()) {
            return true;
        }

        return $blog->user_id == user_id() && $blog->user_type == user_type();
    }

    /**
     * Determine if the given user can create a blog.
     *
     * @param UserPolicy $user
     * @param Blog $blog
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('blog.blog.create');
    }

    /**
     * Determine if the given user can update the given blog.
     *
     * @param UserPolicy $user
     * @param Blog $blog
     *
     * @return bool
     */
    public function update(UserPolicy $user, Blog $blog)
    {
        if ($user->canDo('blog.blog.edit') && $user->isAdmin()) {
            return true;
        }

        return $blog->user_id == user_id() && $blog->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given blog.
     *
     * @param UserPolicy $user
     * @param Blog $blog
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Blog $blog)
    {
        return $blog->user_id == user_id() && $blog->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given blog.
     *
     * @param UserPolicy $user
     * @param Blog $blog
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Blog $blog)
    {
        if ($user->canDo('blog.blog.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given blog.
     *
     * @param UserPolicy $user
     * @param Blog $blog
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Blog $blog)
    {
        if ($user->canDo('blog.blog.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
