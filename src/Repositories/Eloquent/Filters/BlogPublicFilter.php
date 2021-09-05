<?php

namespace Litecms\Blog\Repositories\Eloquent\Filters;

use Litepie\Repository\Interfaces\FilterInterface;
use Litepie\Repository\Interfaces\RepositoryInterface;

class BlogPublicFilter implements FilterInterface
{
    
    public function onlyPublished($model)
    {
        return $model->where('published','yes');
    }

    public function apply($model, RepositoryInterface $repository)
    {
        return $this->onlyPublished($model);
    }
}