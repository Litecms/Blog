<?php

namespace Litecms\Blog\Repositories\Eloquent\Presenters;

use Litepie\Repository\Presenter\Presenter;
use Illuminate\Support\Str;

class BlogListPresenter extends Presenter
{

    public function itemLink()
    {
        return guard_url('blog/blog') . '/' . $this->getRouteKey();
    }

    public function title()
    {
        if ($this->title != '') {
            return $this->title;
        }

        return 'None';
    }

    public function toArray()
    {
        return [
            'id' => $this->getRouteKey(),
            'title' => $this->title(),
            'description' => $this->formatDescription($this->description),
            'image' => url($this->defaultImage('images', 'md')),
            'slug' => $this->slug,
            'status' => $this->status,
            'category' => @$this->category->name,
            'user' => @$this->author->name,
            'created_at' => !is_null($this->created_at) ? $this->created_at->format('Y-m-d H:i:s') : null,
            'updated_at' => !is_null($this->updated_at) ? $this->updated_at->format('Y-m-d H:i:s') : null,
            'meta' => [
                'exists' => $this->exists(),
                'link' => $this->itemLink(),
            ],
        ];
    }

    public function formatDescription($description)
    {
        $description = strip_tags($description);
        return Str::limit($description, 90);
    }

}
