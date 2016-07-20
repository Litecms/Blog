<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;

class CategoryController extends BaseController
{
    /**
     * Constructor.
     *
     * @param type \Litecms\Category\Interfaces\CategoryRepositoryInterface $category
     *
     * @return type
     */
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->middleware('web');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
        parent::__construct();
        $this->repository = $category;
        parent::__construct();
    }

    /**
     * Show category's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {

        $blog_categories = $this->repository
            ->pushCriteria(new \Litecms\Blog\Repositories\Criteria\CategoryPublicCriteria())
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->paginate();

        return $this->theme->of('blog::public.category.index', compact('blog_categories'))->render();
    }

    /**
     * Show category.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $category = $this->repository->scopeQuery(function ($query) use ($slug) {
            return $query->with(['blog' => function ($q) {
                $q->orderBy('title', 'ASC')->get();}])->whereSlug($slug);
        })->first(['*']);
        return $this->theme->of('blog::public.category.show', compact('category'))->render();

    }
}
