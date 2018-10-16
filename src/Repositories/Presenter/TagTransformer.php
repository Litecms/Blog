<?php

namespace Litecms\Blog\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class TagTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Blog\Models\Tag $tag)
    {
        return [
            'id'                => $tag->getRouteKey(),
            'name'              => $tag->name,
            'frequency'         => $tag->frequency,
            'slug'              => $tag->slug,
            'created_at'        => $tag->created_at,
            'updated_at'        => $tag->updated_at,
            'deleted_at'        => $tag->deleted_at,
            'url'              => [
                'public' => trans_url('blog/'.$tag->getPublicKey()),
                'user'   => guard_url('blog/tag/'.$tag->getRouteKey()),
            ], 
            'status'            => trans($tag->status),
            'created_at'        => format_date($tag->created_at),
            'updated_at'        => format_date($tag->updated_at),
        ];
    }
}