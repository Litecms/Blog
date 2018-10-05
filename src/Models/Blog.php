<?php

namespace Litecms\Blog\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Database\Traits\DateFormatter;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Trans\Traits\Translatable;

class Blog extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, DateFormatter, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'litecms.blog.blog.model';


    /**
     * The hasMany that belong to the blog.
     */
    public function comments()
    {
        return $this->hasMany('Litecms\Blog\Models\Comment');
    }

    public function setTagsAttribute($tags)
    { 
        if (is_array($tags)) {
            return $this->attributes['tags'] = $tags;
        }

        return $this->attributes['tags'] = json_encode(explode(',', $tags));
    }

    public function user()
    {
        return $this->morphTo();
    }

    /**
     * The hasMany that belong to the blog.
     */
    public function category()
    {
        return $this->belongsTo('Litecms\Blog\Models\Category');
    }

   
}
