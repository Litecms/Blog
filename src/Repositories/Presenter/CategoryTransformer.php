<?php

namespace Litecms\Blog\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CategoryTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Blog\Models\Category $category)
    {
        return [
            'id'                => $category->getRouteKey(),
            'name'              => $category->name,
            'slug'              => $category->slug,
            'status'            => $category->status,
            'user_type'         => $category->user_type,
            'user_id'           => $category->user_id,
            'upload_folder'     => $category->upload_folder,
            'created_at'        => $category->created_at,
            'updated_at'        => $category->updated_at,
            'deleted_at'        => $category->deleted_at,
            'url'              => [
                'public' => trans_url('blog/'.$category->getPublicKey()),
                'user'   => guard_url('blog/category/'.$category->getRouteKey()),
            ], 
            'status'            => trans('app.'.$category->status),
            'created_at'        => format_date($category->created_at),
            'updated_at'        => format_date($category->updated_at),
        ];
    }
}