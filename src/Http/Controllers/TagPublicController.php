<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\Http\Requests\PublicRequest;
use Litepie\Repository\Filter\RequestFilter;
use Litecms\Blog\Repositories\Eloquent\Filters\TagPublicFilter;
use Litecms\Blog\Repositories\Eloquent\Presenters\TagListPresenter;
use Litecms\Blog\Interfaces\TagRepositoryInterface;

class TagPublicController extends BaseController
{

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(TagRepositoryInterface $tag)
    {
        parent::__construct();
        $this->modules = $this->modules(config('litecms.blog.modules'), 'blog', guard_url('blog'));
        $this->repository = $tag;

    }

    /**
     * Show tag's list.
     *
     * @return response
     */
    protected function index(PublicRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(TagPublicFilter::class)
            ->setPresenter(TagListPresenter::class)
            ->simplePaginate($pageLimit)
            // ->withQueryString()
            ->toArray();

        extract($data);
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('blog::tag.names'))
            ->view('blog::public.tag.index')
            ->data(compact('data', 'meta', 'modules'))
            ->output();
    }


    /**
     * Show tag.
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

        return $this->response->setMetaTitle($data['name'] . trans('blog::tag.name'))
            ->view('blog::public.tag.show')
            ->data(compact('data', 'modules'))
            ->output();
    }

}
