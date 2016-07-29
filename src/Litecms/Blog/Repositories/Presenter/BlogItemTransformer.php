<?php

namespace Litecms\Blog\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class BlogItemTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Blog\Models\Blog $blog)
    {
        return [
            'id'          => $blog->getRouteKey(),
            'category_id' => ucfirst($blog->blog_categories->name),
            'title'       => ucfirst($blog->title),
            'description' => ucfirst($blog->description),
            'image'       => $blog->image,
            'images'      => $blog->images,
            'viewcount'   => $blog->viewcount,
            'status'      => $blog->status,
            'posted_on'   => format_date($blog->posted_on),
            'published'   => $blog->published,
        ];
    }
}
