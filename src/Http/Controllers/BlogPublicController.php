<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\Http\Requests\PublicRequest;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Litecms\Blog\Interfaces\TagRepositoryInterface;
use Litecms\Blog\Repositories\Eloquent\Filters\BlogPublicFilter;
use Litecms\Blog\Repositories\Eloquent\Presenters\BlogListPresenter;
use Litepie\Repository\Filter\RequestFilter;

class BlogPublicController extends BaseController
{

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(
        BlogRepositoryInterface $blog,
        CategoryRepositoryInterface $category,
        TagRepositoryInterface $tag
    ) {
        parent::__construct();
        $this->modules = $this->modules(config('litecms.blog.modules'), 'blog', guard_url('blog'));
        $this->repository = $blog;
        $this->category = $category;
        $this->tag = $tag;

    }

    /**
     * Show blog's list.
     *
     * @return response
     */
    protected function index(PublicRequest $request)
    {

        $search = $request->search;
        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(BlogPublicFilter::class)
            ->setPresenter(BlogListPresenter::class)
            ->select('blogs.*')
            ->paginate($pageLimit)
            ->withQueryString()
            ->appends([
                'dd' => 'dd',
            ])
            ->toArray();

        extract($data);

        $categories = $this->category->categories()->toArray();
        $tags = $this->tag->tags()->toArray();
        $recent = $this->repository->recent(2)->toArray();

        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::public.blog.index')
            ->data(compact('data', 'meta', 'categories', 'tags', 'recent'))
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

        $categories = $this->category->categories()->toArray();
        $tags = $this->tag->tags()->toArray();
        $recent = $this->repository->recent(2)->toArray();
    
        return $this->response->setMetaTitle($data['title'] . trans('blog::blog.name'))
            ->view('blog::public.blog.show')
            ->data(compact('data', 'categories', 'tags', 'recent'))
            ->output();
    }

}
