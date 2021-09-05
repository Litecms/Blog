<?php

namespace Litecms\Blog\Policies;

use Litepie\User\Interfaces\UserPolicyInterface;
use Litecms\Blog\Models\Tag;

class TagPolicy
{

    /**
     * Determine if the given user can view the tag.
     *
     * @param UserPolicyInterface $authUser
     * @param Tag $tag
     *
     * @return bool
     */
    public function view(UserPolicyInterface $authUser, Tag $tag)
    {
        if ($authUser->canDo('blog.tag.view') && $authUser->isAdmin()) {
            return true;
        }

        return $tag->user_id == user_id() && $tag->user_type == user_type();
    }

    /**
     * Determine if the given user can create a tag.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function create(UserPolicyInterface $authUser)
    {
        return  $authUser->canDo('blog.tag.create');
    }

    /**
     * Determine if the given user can update the given tag.
     *
     * @param UserPolicyInterface $authUser
     * @param Tag $tag
     *
     * @return bool
     */
    public function update(UserPolicyInterface $authUser, Tag $tag)
    {
        if ($authUser->canDo('blog.tag.edit') && $authUser->isAdmin()) {
            return true;
        }

        return $tag->user_id == user_id() && $tag->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given tag.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function destroy(UserPolicyInterface $authUser, Tag $tag)
    {
        return $tag->user_id == user_id() && $tag->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given tag.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function verify(UserPolicyInterface $authUser, Tag $tag)
    {
        if ($authUser->canDo('blog.tag.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given tag.
     *
     * @param UserPolicyInterface $authUser
     *
     * @return bool
     */
    public function approve(UserPolicyInterface $authUser, Tag $tag)
    {
        if ($authUser->canDo('blog.tag.approve')) {
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
