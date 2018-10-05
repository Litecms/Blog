<?php

namespace Litecms\Blog;

use User;

class Blog
{
    /**
     * $category object.
     */
    protected $category;
    /**
     * $blog object.
     */
    protected $blog;
    /**
     * $comment object.
     */
    protected $comment;
    /**
     * $tag object.
     */
    protected $tag;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Blog\Interfaces\CategoryRepositoryInterface $category,
        \Litecms\Blog\Interfaces\BlogRepositoryInterface $blog,
        \Litecms\Blog\Interfaces\CommentRepositoryInterface $comment,
        \Litecms\Blog\Interfaces\TagRepositoryInterface $tag)
    {
        $this->category = $category;
        $this->blog = $blog;
        $this->comment = $comment;
        $this->tag = $tag;
    }

    /**
     * Returns count of blog.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.category.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->category->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\CategoryUserCriteria());
        }

        $category = $this->category->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('blog::' . $view, compact('category'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.blog.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->blog->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\BlogUserCriteria());
    //     }

    //     $blog = $this->blog->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('blog::' . $view, compact('blog'))->render();
    // }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.comment.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->comment->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\CommentUserCriteria());
    //     }

    //     $comment = $this->comment->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('blog::' . $view, compact('comment'))->render();
    // }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.tag.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->tag->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\TagUserCriteria());
    //     }

    //     $tag = $this->tag->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('blog::' . $view, compact('tag'))->render();
    // }
    public function selectCategories()
   {
      return $this->category->selectCategories();
       
   }
    
    public function selectadminCategories()
   {
       return $this->category->selectadminCategories();
   }

   

  public function selectTags()
   {
       return $this->tag->selectTags();
   }

    

}
