<?php

namespace Litecms\Blog\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Blog\Models\Tag;

class TagPolicy
{

    /**
     * Determine if the given user can view the tag.
     *
     * @param UserPolicy $user
     * @param Tag $tag
     *
     * @return bool
     */
    public function view(UserPolicy $user, Tag $tag)
    {
        if ($user->canDo('blog.tag.view') && $user->isAdmin()) {
            return true;
        }

        return $tag->user_id == user_id() && $tag->user_type == user_type();
    }

    /**
     * Determine if the given user can create a tag.
     *
     * @param UserPolicy $user
     * @param Tag $tag
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('blog.tag.create');
    }

    /**
     * Determine if the given user can update the given tag.
     *
     * @param UserPolicy $user
     * @param Tag $tag
     *
     * @return bool
     */
    public function update(UserPolicy $user, Tag $tag)
    {
        if ($user->canDo('blog.tag.edit') && $user->isAdmin()) {
            return true;
        }

        return $tag->user_id == user_id() && $tag->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given tag.
     *
     * @param UserPolicy $user
     * @param Tag $tag
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Tag $tag)
    {
        return $tag->user_id == user_id() && $tag->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given tag.
     *
     * @param UserPolicy $user
     * @param Tag $tag
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Tag $tag)
    {
        if ($user->canDo('blog.tag.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given tag.
     *
     * @param UserPolicy $user
     * @param Tag $tag
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Tag $tag)
    {
        if ($user->canDo('blog.tag.approve')) {
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
