<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title' =>
        'like',
    ];

    public function boot()
    {
        $this->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'));
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        $this->fieldSearchable = config('package.blog.blog.search');
        return config('package.blog.blog.model');
    }

    /**
     * count total news
     * @return int
     */
    public function countBlog()
    {
        return $this->model
            ->where('published', 'Yes')
            ->count();
    }

    /**
     * get category for category based searching in public side
     * @param type $category
     * @return type
     */
    public function category($category)
    {

        return $this->model
            ->select('blog_categories.slug as categoryslug', 'blogs.slug as slug', 'blogs.id as id', 'blogs.category_id as category_id', 'blogs.title as title', 'blogs.description as description', 'blogs.user_id as user_id', 'blogs.images as images', 'blogs.status as status', 'blogs.published as published', 'blogs.posted_on as posted_on')
            ->where('blog_categories.slug', '=', $category)
            ->where('blogs.user_id', '=', user_id())
            ->join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
            ->get();
    }

    /**
     * blog count based on user
     * @param type $user_id
     * @return count
     */

    public function BlogCount($user_id)
    {
        return $this->model
            ->where('user_id', $user_id)
            ->count();
    }

    /**
     * take blog count based on category
     * @param type $id
     * @return type
     */

    public function countBlogsCategory($id)
    {

        return $this->model
            ->whereCategoryId($id)
            ->where('published', 'Yes')
            ->count();
    }

    /**
     * take categorys
     * @param type $category
     * @return type
     */

    public function categorys($category)
    {

        return $this->model
            ->select('blog_categories.slug as categoryslug', 'blogs.slug as slug', 'blogs.id as id', 'blogs.category_id as category_id', 'blogs.title as title', 'blogs.description as description', 'blogs.user_id as user_id', 'blogs.images as images', 'blogs.status as status', 'blogs.published as published', 'blogs.posted_on as posted_on')
            ->where('blog_categories.slug', '=', $category)
            ->where('blogs.published', '=', 'Yes')
            ->join('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
            ->get();
    }

}
