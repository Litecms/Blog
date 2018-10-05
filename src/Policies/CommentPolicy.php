<?php

namespace Litecms\Blog\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Blog\Models\Comment;

class CommentPolicy
{

    /**
     * Determine if the given user can view the comment.
     *
     * @param UserPolicy $user
     * @param Comment $comment
     *
     * @return bool
     */
    public function view(UserPolicy $user, Comment $comment)
    {
        if ($user->canDo('blog.comment.view') && $user->isAdmin()) {
            return true;
        }

        return $comment->user_id == user_id() && $comment->user_type == user_type();
    }

    /**
     * Determine if the given user can create a comment.
     *
     * @param UserPolicy $user
     * @param Comment $comment
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('blog.comment.create');
    }

    /**
     * Determine if the given user can update the given comment.
     *
     * @param UserPolicy $user
     * @param Comment $comment
     *
     * @return bool
     */
    public function update(UserPolicy $user, Comment $comment)
    {
        if ($user->canDo('blog.comment.edit') && $user->isAdmin()) {
            return true;
        }

        return $comment->user_id == user_id() && $comment->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given comment.
     *
     * @param UserPolicy $user
     * @param Comment $comment
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Comment $comment)
    {
        return $comment->user_id == user_id() && $comment->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given comment.
     *
     * @param UserPolicy $user
     * @param Comment $comment
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Comment $comment)
    {
        if ($user->canDo('blog.comment.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given comment.
     *
     * @param UserPolicy $user
     * @param Comment $comment
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Comment $comment)
    {
        if ($user->canDo('blog.comment.approve')) {
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
