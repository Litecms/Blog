<?php

namespace Litecms\Blog\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class BlogListTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Blog\Models\Blog $blog)
    {
        return [
            'id'          => $blog->getRouteKey(),
            'category_id' => ucfirst($blog->blogcategories->name),
            'title'       => ucfirst($blog->title),
            'description' => ucfirst($blog->description),
            'image'       => $blog->image,
            'images'      => $blog->images,
            'viewcount'   => $blog->viewcount,
            'status'      => $blog->status,
            'posted_on'   => format_date($blog->posted_on),
            'published'   => ($blog->published == 'Yes') ? 'Published' : '-',
        ];
    }
}
