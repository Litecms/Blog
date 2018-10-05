<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.blog.blog.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.blog.blog.model.model');
    }
}
