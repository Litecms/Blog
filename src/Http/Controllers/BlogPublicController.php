<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\Http\Requests\PublicRequest;
use Litepie\Repository\Filter\RequestFilter;
use Litecms\Blog\Repositories\Eloquent\Filters\BlogPublicFilter;
use Litecms\Blog\Repositories\Eloquent\Presenters\BlogListPresenter;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Litecms\Blog\Interfaces\TagRepositoryInterface;

class BlogPublicController extends BaseController
{

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(BlogRepositoryInterface $blog,CategoryRepositoryInterface $category,TagRepositoryInterface $tag)
    {
        parent::__construct();
        $this->modules = $this->modules(config('litecms.blog.modules'), 'blog', guard_url('blog'));
        $this->category = $category;
        $this->tag = $tag;
        $this->repository = $blog;

    }

    /**
     * Show blog's list.
     *
     * @return response
     */
    protected function index(PublicRequest $request)
    {

        $search=$request->search;
        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository->where('published','yes')
            ->pushFilter(RequestFilter::class)
            ->pushFilter(BlogPublicFilter::class)
            ->setPresenter(BlogListPresenter::class)
            ->Paginate($pageLimit);
            // ->withQueryString()
            // ->toArray();
           
        // extract($data);
        $categories = $this->category->categories();
        $tags = $this->tag->tags();
        $blogs= $this->repository->recentBlogs();
        $modules = $this->modules;

        $view = 'index';
        if ($request->ajax()) {
            $view = 'filter';
        }

        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::public.blog.'.$view)
            ->data(compact('data', 'modules','categories','tags','blogs'))
            ->output();
    }


    /**
     * Show blog.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show(PublicRequest $request, $slug)
    {
        $data = $this->repository
            ->findBySlug($slug)
            ->toArray();
        $modules = $this->modules;

        $categories = $this->category->categories();

        $tags = $this->tag->tags();

        $blogs= $this->repository->recentBlogs();

        return $this->response->setMetaTitle($data['title'] . trans('blog::blog.name'))
            ->view('blog::public.blog.show')
            ->data(compact('data', 'modules','categories','tags','blogs'))
            ->output();
    }

}
