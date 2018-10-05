<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\CommentRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.blog.comment.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.blog.comment.model.model');
    }

    // 
}
