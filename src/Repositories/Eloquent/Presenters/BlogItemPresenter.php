<?php

namespace Litecms\Blog\Repositories\Eloquent\Presenters;

use Litepie\Repository\Presenter\Presenter;

class BlogItemPresenter extends Presenter
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

        if ($this->name != '') {
            return $this->name;
        }

        return 'None';
    }

    public function toArray()
    {
        return [
            'id' => $this->getRouteKey(),
            'title' => $this->title(),
            'category_id' => $this->category_id,
            'title' => $this->title,
            'description' => $this->description,
            'images' => $this->images,
            'tags' => $this->tags,
            'viewcount' => $this->viewcount,
            'slug' => $this->slug,
            'published' => $this->published,
            'published_at' => $this->published_at,
            'user_id' => @$this->users->name,
            'user_type' => $this->user_type,
            'created_at' => !is_null($this->created_at) ? $this->created_at->format('Y-m-d H:i:s') : null,
            'updated_at' => !is_null($this->updated_at) ? $this->updated_at->format('Y-m-d H:i:s') : null,
            'meta' => [
                'exists' => $this->exists(),
                'link' => $this->itemLink(),
                'upload_url' => $this->getUploadURL(''),
            ],
        ];
    }
}
