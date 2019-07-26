<div class='col-md-4 col-sm-6'>
                    <div class='form-group'>
                        <label for='published_at' class='control-label'>{!!trans('blog::blog.label.published_at')!!}</label>
                        <div class='input-group pickdatetime'>
                            {!! Form::text('published_at')
                            -> placeholder(trans('blog::blog.placeholder.published_at'))
                            -> addClass('pickdatetime')
                            ->raw()!!}
                           <span class='input-group-addon'><i class='fa fa-calendar'></i></span>
                        </div>
                    </div>
                 </div>


 public function selectCategories()
   {
      return $this->category->selectCategories();
       
   }
    

    public function selectadminCategories()
   {
       return $this->category->selectadminCategories();
   }
   
   public function selectCategory()
   {

       return $this->category->selectCategory();
   }

public function selectTags()
   {
       $temp = [];
       $tag = $this->tag->scopeQuery(function ($query) {
           return $query->orderBy('name', 'ASC');
       })->all();

       foreach ($tag as $key => $value) {

           $temp[$value->slug] = ucfirst($value->name);
       }

       return $temp;
   }

   public function selectComments($id)
   {

       $temp = [];
       $comment = $this->comment->scopeQuery(function ($query) use($id) {
           return $query->where('blog_id',$id);
       })->all();

       foreach ($comment as $key => $value) {

           $temp[$value->author] = ucfirst($value->name);
       }

       return $temp;
   }
   
  
}
<?php
 $temp = [];
       $category = $this->category->scopeQuery(function ($query) use($category_id) {
           return $query->where('id',$category_id);
       })->all();

       foreach ($category as $key => $value) {

           $temp[$value->slug] = ucfirst($value->name);
       }

       return $temp;
?>