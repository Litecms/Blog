<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\TagRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TagRepository extends BaseRepository implements TagRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.blog.tag.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.blog.tag.model.model');
    }

    public function selectTags()
    {
        return $this->pluck('name','slug');
    }
}
