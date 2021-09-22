<?php

namespace Litecms\Blog;

class Blog
{
    /**
     * $blog object.
     */
    protected $blog;

    /**
     * $category object.
     */
    protected $category;

    /**
     * $tag object.
     */
    protected $tag;

    /**
     * Constructor.
     */
    public function __construct(
        \Litecms\Blog\Interfaces\BlogRepositoryInterface $blog,
        \Litecms\Blog\Interfaces\CategoryRepositoryInterface $category,
        \Litecms\Blog\Interfaces\TagRepositoryInterface $tag) {
        $this->blog = $blog;
        $this->category = $category;
        $this->tag = $tag;
    }

    // public function category()
    // {
    //     return $this->category->options();
    // }
    public function recent($count = 5)
    {
        return $this->blog
            ->recent($count)
            ->toArray();
    }
}
