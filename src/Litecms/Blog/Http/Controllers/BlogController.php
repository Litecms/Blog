<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;

class BlogController extends BaseController
{
    /**
     * Constructor.
     *
     * @param type \Litecms\Blog\Interfaces\BlogRepositoryInterface $blog
     *
     * @return type
     */
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->middleware('web');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
        $this->repository = $blog;
        parent::__construct();
    }

    /**
     * Show blog's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $this->repository->pushCriteria(new \Litecms\Blog\Repositories\Criteria\BlogPublicCriteria());
        $blogs = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('posted_on', 'DESC');
        })->all();
        return $this->theme->of('blog::public.blog.index', compact('blogs'))->render();
    }

    /**
     * Show blog.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $blog = $this->repository->scopeQuery(function ($query) use ($slug) {
            return $query->whereSlug($slug);
        })->first(['*']);
        return $this->theme->of('blog::public.blog.show', compact('blog'))->render();
    }

    /**
     * show category
     * @param type $category
     * @return type
     */
    protected function category($category)
    {

        $blogs = $this->repository->categorys($category);

        return $this->theme->of('blog::public.blog.index', compact('blogs'))->render();
    }

}
