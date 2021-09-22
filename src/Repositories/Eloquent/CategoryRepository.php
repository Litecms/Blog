<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Litecms\Blog\Repositories\Eloquent\Presenters\CategoryItemPresenter;
use Litecms\Blog\Repositories\Eloquent\Presenters\CategoryListPresenter;
use Litepie\Repository\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

    public function boot()
    {
        $this->fieldSearchable = config('litecms.blog.category.model.search');
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.blog.category.model.model');
    }

    /**
     * Returns the default presenter if none is availabale.
     *
     * @return void
     */
    public function presenter()
    {
        return CategoryItemPresenter::class;
    }

    public function categories()
    {
        return $this
            ->setPresenter(CategoryListPresenter::class)
            ->orderBy('name', 'ASC')
            ->get();
    }

}
