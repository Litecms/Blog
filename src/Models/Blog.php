<?php

namespace Litecms\Blog\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Sluggable;
use Litepie\Database\Traits\Sortable;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Trans\Traits\Translatable;

class Blog extends Model
{
    use Filer;
    use Hashids;
    use Sluggable;
    use SoftDeletes;
    use Sortable;
    use Translatable;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litecms.blog.blog.model';

     public function author()
     {
        return $this->belongsTo('App\Models\User', 'user_id');
     }
     public function category()
     {
      return $this->belongsTo('Litecms\Blog\Models\Category', 'category_id');
     }
}
