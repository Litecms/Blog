<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\Http\Requests\PublicRequest;
use Litepie\Repository\Filter\RequestFilter;
use Litecms\Blog\Repositories\Eloquent\Filters\CategoryPublicFilter;
use Litecms\Blog\Repositories\Eloquent\Presenters\CategoryListPresenter;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;

class CategoryPublicController extends BaseController
{

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(CategoryRepositoryInterface $category)
    {
        parent::__construct();
        $this->modules = $this->modules(config('litecms.blog.modules'), 'blog', guard_url('blog'));
        $this->repository = $category;

    }

    /**
     * Show category's list.
     *
     * @return response
     */
    protected function index(PublicRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(CategoryPublicFilter::class)
            ->setPresenter(CategoryListPresenter::class)
            ->simplePaginate($pageLimit)
            // ->withQueryString()
            ->toArray();

        extract($data);
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('blog::category.names'))
            ->view('blog::public.category.index')
            ->data(compact('data', 'meta', 'modules'))
            ->output();
    }


    /**
     * Show category.
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

        return $this->response->setMetaTitle($data['name'] . trans('blog::category.name'))
            ->view('blog::public.category.show')
            ->data(compact('data', 'modules'))
            ->output();
    }

}
