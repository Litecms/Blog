<?php

namespace Litecms\Blog\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Revision\Traits\Revision;
use Litepie\Trans\Traits\Trans;
use Litepie\User\Traits\UserModel;

class Blog extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Trans, Revision, PresentableTrait, UserModel;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'package.blog.blog';

    /**
     * The blog_categories that belong to the blog.
     */
    public function blogCategories()
    {

        return $this->belongsTo('Litecms\Blog\Models\Category', 'category_id');
    }

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }

    public function getDefaultImageAttribute()
    {

        if (empty($this->attributes['images'])) {
            return '';
        }

        $images = json_decode($this->attributes['images'], true);
        $image  = end($images);

        return @$image['efolder'] . '/' . @$image['file'];
    }

}
