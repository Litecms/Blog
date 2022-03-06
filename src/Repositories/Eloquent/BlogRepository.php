<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Repositories\Eloquent\Presenters\BlogItemPresenter;
use Litecms\Blog\Repositories\Eloquent\Presenters\BlogListPresenter;
use Litepie\Repository\BaseRepository;

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

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return BlogItemPresenter::class;
    }

    public function recent($count = 5)
    {
        return $this
            ->setPresenter(BlogListPresenter::class)
            ->orderBy('id', 'DESC')
            ->get()
            ->take($count);
    }
}
