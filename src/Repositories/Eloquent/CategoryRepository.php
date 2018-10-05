<?php

namespace Litecms\Blog\Repositories\Eloquent;

use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

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
    
    public function selectCategories()
    {
        return $this->pluck('name','slug');
    }

    public function selectadminCategories()
    {
        return $this->pluck('name','id');
    }

   
    
}
