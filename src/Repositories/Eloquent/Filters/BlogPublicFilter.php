<?php

namespace Litecms\Blog\Repositories\Eloquent\Filters;

use Litepie\Repository\Interfaces\FilterInterface;
use Litepie\Repository\Interfaces\RepositoryInterface;

class BlogPublicFilter implements FilterInterface
{

    public function apply($model, RepositoryInterface $repository)
    {
        $model = $this->matchTag($model);
        $model = $this->matchCategory($model);
        return $this->onlyPublished($model);
    }

    public function onlyPublished($model)
    {
        return $model->where('blogs.status', 'Published');
    }

    public function matchTag($model)
    {
        $tag = request()->get('tag', '');

        if (empty($tag)) {
            return $model;
        }

        $model = $model->where('blogs.tags', 'LIKE', "%$tag%");

        return $model;
    }

    public function matchCategory($model)
    {
        $category = request()->get('category', '');
        if (empty($category)) {
            return $model;
        }

        $model = $model->leftJoin(config('litecms.blog.category.model.table'), 'blogs.category_id', '=', 'blog_categories.id');
        $model = $model->where('blog_categories.slug', $category);

        return $model;

    }

}
