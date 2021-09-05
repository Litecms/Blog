<?php

namespace Litecms\Blog\Policies;

use Litepie\User\Interfaces\UserPolicyInterface;
use Litecms\Blog\Models\Blog;

class BlogPolicy
{

    /**
     * Determine if the given user can view the blog.
     *
     * @param UserPolicyInterface $authUser
     * @param Blog $blog
     *
     * @return bool
     */
    public function view(UserPolicyInterface $authUser, Blog $blog)
    {
        if ($authUser->canDo('blog.blog.view') && $authUser->isAdmin()) {
            return true;
        }

        return $blog->user_id == user_id() && $blog->user_type == user_type();
    }

    /**
     * Determine if the given user can create a blog.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function create(UserPolicyInterface $authUser)
    {
        return  $authUser->canDo('blog.blog.create');
    }

    /**
     * Determine if the given user can update the given blog.
     *
     * @param UserPolicyInterface $authUser
     * @param Blog $blog
     *
     * @return bool
     */
    public function update(UserPolicyInterface $authUser, Blog $blog)
    {
        if ($authUser->canDo('blog.blog.edit') && $authUser->isAdmin()) {
            return true;
        }

        return $blog->user_id == user_id() && $blog->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given blog.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function destroy(UserPolicyInterface $authUser, Blog $blog)
    {
        return $blog->user_id == user_id() && $blog->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given blog.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function verify(UserPolicyInterface $authUser, Blog $blog)
    {
        if ($authUser->canDo('blog.blog.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given blog.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function approve(UserPolicyInterface $authUser, Blog $blog)
    {
        if ($authUser->canDo('blog.blog.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $authUser    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($authUser, $ability)
    {
        if ($authUser->isSuperuser()) {
            return true;
        }
    }
}
