<?php

namespace Litecms\Blog;

use User;

class Blog
{
    /**
     * $blog object.
     */
    protected $blog;    /**
     * $category object.
     */
    protected $category;    /**
     * $tag object.
     */
    protected $tag;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Blog\Interfaces\BlogRepositoryInterface $blog,        \Litecms\Blog\Interfaces\CategoryRepositoryInterface $category,        \Litecms\Blog\Interfaces\TagRepositoryInterface $tag)
    {
        $this->blog = $blog;        $this->category = $category;        $this->tag = $tag;
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
     * Find blog by slug.
     *
     * @param array $filter
     *
     * @return int
     */
    public function blog($slug)
    {
        return  $this->blog
            ->findBySlug($slig)
            ->toArray();
    }
    public function category()
    {
        return $this->category->category();
    }
}
