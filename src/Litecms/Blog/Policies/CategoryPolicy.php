<?php

namespace Litecms\Blog\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Litecms\Blog\Models\Category;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the category.
     *
     * @param User $user
     * @param Category $category
     *
     * @return bool
     */
    public function view(User $user, Category $category)
    {

        if ($user->canDo('blog.category.view') && $user->is('admin')) {
            return true;
        }

        return $user->id === $category->user_id;
    }

    /**
     * Determine if the given user can create a category.
     *
     * @param User $user
     * @param Category $category
     *
     * @return bool
     */
    public function create(User $user)
    {
        return $user->canDo('blog.category.create');
    }

    /**
     * Determine if the given user can update the given category.
     *
     * @param User $user
     * @param Category $category
     *
     * @return bool
     */
    public function update(User $user, Category $category)
    {

        if ($user->canDo('blog.category.update') && $user->is('admin')) {
            return true;
        }

        return $user->id === $category->user_id;
    }

    /**
     * Determine if the given user can delete the given category.
     *
     * @param User $user
     * @param Category $category
     *
     * @return bool
     */
    public function destroy(User $user, Category $category)
    {

        if ($user->canDo('blog.category.delete') && $user->is('admin')) {
            return true;
        }

        return $user->id === $category->user_id;
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

        if ($user->isSuperUser()) {
            return true;
        }

    }

}
