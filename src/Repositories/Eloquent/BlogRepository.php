<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litepie\Repository\BaseRepository;
use Litecms\Blog\Repositories\Eloquent\Presenters\BlogItemPresenter;


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
    public function blogs()
    {
        return $this->model->orderBy('title', 'ASC')->get();
    }
    public function recentBlogs()
    {
        return $this->model->where('published','yes')->orderBy('id', 'DESC')->get()->take(2);
    }
}
