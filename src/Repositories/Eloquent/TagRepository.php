<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\TagRepositoryInterface;
use Litecms\Blog\Repositories\Eloquent\Presenters\TagItemPresenter;
use Litepie\Repository\BaseRepository;

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

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return TagItemPresenter::class;
    }
    public function tags()
    {
        return $this
            ->orderBy('name', 'ASC')
            ->get();
    }
}
