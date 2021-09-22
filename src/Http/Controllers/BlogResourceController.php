<?php

namespace Litecms\Blog\Http\Controllers;

use Exception;
use Litepie\Http\Controllers\ResourceController as BaseController;
use Litepie\Repository\Filter\RequestFilter;
use Litecms\Blog\Forms\Blog as BlogForm;
use Litecms\Blog\Http\Requests\BlogRequest;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Repositories\Eloquent\Filters\BlogResourceFilter;
use Litecms\Blog\Repositories\Eloquent\Presenters\BlogListPresenter;
use Str;

/**
 * Resource controller class for blog.
 */
class BlogResourceController extends BaseController
{

    /**
     * Initialize blog resource controller.
     *
     *
     * @return null
     */
    public function __construct(BlogRepositoryInterface $blog)
    {
        parent::__construct();
        $this->form = BlogForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('litecms.blog.modules'), 'blog', guard_url('blog'));
        $this->repository = $blog;
    }

    /**
     * Display a list of blog.
     *
     * @return Response
     */
    public function index(BlogRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(BlogResourceFilter::class)
            ->setPresenter(BlogListPresenter::class)
            ->simplePaginate($pageLimit)
            // ->withQueryString()
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::blog.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
            ->output();
    }

    /**
     * Display blog.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return Response
     */
    public function show(BlogRequest $request, BlogRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('blog::blog.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('blog::blog.show')
            ->output();
    }

    /**
     * Show the form for creating a new blog.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(BlogRequest $request, BlogRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('blog::blog.name'))
            ->view('blog::blog.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(BlogRequest $request, BlogRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('blog::blog.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('blog/blog/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/blog/blog'))
                ->redirect();
        }

    }

    /**
     * Show blog for editing.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return Response
     */
    public function edit(BlogRequest $request, BlogRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('blog::blog.name'))
            ->view('blog::blog.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Update the blog.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return Response
     */
    public function update(BlogRequest $request, BlogRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('blog::blog.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('blog/blog/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/blog/' .  $repository->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the blog.
     *
     * @param Model   $blog
     *
     * @return Response
     */
    public function destroy(BlogRequest $request, BlogRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('blog::blog.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('blog/blog/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/blog/' .  $repository->getRouteKey()))
                ->redirect();
        }

    }
}
