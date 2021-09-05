<?php

namespace Litecms\Blog\Http\Controllers;

use Exception;
use Litepie\Http\Controllers\ResourceController as BaseController;
use Litepie\Repository\Filter\RequestFilter;
use Litecms\Blog\Forms\Tag as TagForm;
use Litecms\Blog\Http\Requests\TagRequest;
use Litecms\Blog\Interfaces\TagRepositoryInterface;
use Litecms\Blog\Repositories\Eloquent\Filters\TagResourceFilter;
use Litecms\Blog\Repositories\Eloquent\Presenters\TagListPresenter;

/**
 * Resource controller class for tag.
 */
class TagResourceController extends BaseController
{

    /**
     * Initialize tag resource controller.
     *
     *
     * @return null
     */
    public function __construct(TagRepositoryInterface $tag)
    {
        parent::__construct();
        $this->form = TagForm::setAttributes()->toArray();
        $this->modules = $this->modules(config('litecms.blog.modules'), 'blog', guard_url('blog'));
        $this->repository = $tag;
    }

    /**
     * Display a list of tag.
     *
     * @return Response
     */
    public function index(TagRequest $request)
    {

        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $data = $this->repository
            ->pushFilter(RequestFilter::class)
            ->pushFilter(TagResourceFilter::class)
            ->setPresenter(TagListPresenter::class)
            ->simplePaginate($pageLimit)
            // ->withQueryString()
            ->toArray();

        extract($data);
        $form = $this->form;
        $modules = $this->modules;

        return $this->response->setMetaTitle(trans('blog::tag.names'))
            ->view('blog::tag.index')
            ->data(compact('data', 'meta', 'links', 'modules', 'form'))
            ->output();
    }

    /**
     * Display tag.
     *
     * @param Request $request
     * @param Model   $tag
     *
     * @return Response
     */
    public function show(TagRequest $request, TagRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('blog::tag.name'))
            ->data(compact('data', 'form', 'modules', 'form'))
            ->view('blog::tag.show')
            ->output();
    }

    /**
     * Show the form for creating a new tag.
     *
     * @param Request $request
     *x
     * @return Response
     */
    public function create(TagRequest $request, TagRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('blog::tag.name'))
            ->view('blog::tag.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Create new tag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(TagRequest $request, TagRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $attributes['user_type'] = user_type();
            $repository->create($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.created', ['Module' => trans('blog::tag.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('blog/tag/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/blog/tag'))
                ->redirect();
        }

    }

    /**
     * Show tag for editing.
     *
     * @param Request $request
     * @param Model   $tag
     *
     * @return Response
     */
    public function edit(TagRequest $request, TagRepositoryInterface $repository)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = $repository->toArray();

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('blog::tag.name'))
            ->view('blog::tag.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();
    }

    /**
     * Update the tag.
     *
     * @param Request $request
     * @param Model   $tag
     *
     * @return Response
     */
    public function update(TagRequest $request, TagRepositoryInterface $repository)
    {
        try {
            $attributes = $request->all();
            $repository->update($attributes);
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('blog::tag.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('blog/tag/' . $data['id']))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/tag/' .  $repository->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the tag.
     *
     * @param Model   $tag
     *
     * @return Response
     */
    public function destroy(TagRequest $request, TagRepositoryInterface $repository)
    {
        try {
            $repository->delete();
            $data = $repository->toArray();

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('blog::tag.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('blog/tag/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/tag/' .  $repository->getRouteKey()))
                ->redirect();
        }

    }
}
