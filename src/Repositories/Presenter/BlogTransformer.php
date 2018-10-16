<?php

namespace Litecms\Blog\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class BlogTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Blog\Models\Blog $blog)
    {
        return [
            'id'                => $blog->getRouteKey(),
            'category_id'       => $blog->category->name,
            'title'             => $blog->title,
            'description'       => $blog->description,
            'images'            => $blog->images,
            'tags'              => $blog->tags,
            'viewcount'         => $blog->viewcount,
            'slug'              => $blog->slug,
            'published'         => $blog->published,
            'published_at'      => $blog->published_at,
            'user_type'         => $blog->user_type,
            'user_id'           => $blog->user_id,
            'upload_folder'     => $blog->upload_folder,
            'created_at'        => $blog->created_at,
            'updated_at'        => $blog->updated_at,
            'deleted_at'        => $blog->deleted_at,
            'url'              => [
                'public' => trans_url('blog/'.$blog->getPublicKey()),
                'user'   => guard_url('blog/blog/'.$blog->getRouteKey()),
            ], 
            'status'            => trans('app.'.$blog->status),
            'created_at'        => format_date($blog->created_at),
            'updated_at'        => format_date($blog->updated_at),
        ];
    }
}