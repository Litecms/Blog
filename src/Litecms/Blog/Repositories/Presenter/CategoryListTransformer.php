<?php

namespace Litecms\Blog\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class CategoryListTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Blog\Models\Category $category)
    {
        return [
            'id'     => $category->getRouteKey(),
            'name'   => ucfirst($category->name),
            'status' => $category->status,
        ];
    }
}
