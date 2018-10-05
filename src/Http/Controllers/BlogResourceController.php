<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Blog\Http\Requests\BlogRequest;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Models\Blog;

/**
 * Resource controller class for blog.
 */
class BlogResourceController extends BaseController
{

    /**
     * Initialize blog resource controller.
     *
     * @param type BlogRepositoryInterface $blog
     *
     * @return null
     */
    public function __construct(BlogRepositoryInterface $blog)
    {
        parent::__construct();
        $this->repository = $blog;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Blog\Repositories\Criteria\BlogResourceCriteria::class);
    }

    /**
     * Display a list of blog.
     *
     * @return Response
     */
    public function index(BlogRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Blog\Repositories\Presenter\BlogPresenter::class)
                ->$function();
        }

        $blogs = $this->repository->paginate();

        return $this->response->title(trans('blog::blog.names'))
            ->view('blog::blog.index', true)
            ->data(compact('blogs'))
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
    public function show(BlogRequest $request, Blog $blog)
    {

        if ($blog->exists) {
            $view = 'blog::blog.show';
        } else {
            $view = 'blog::blog.new';
        }

        return $this->response->title(trans('app.view') . ' ' . trans('blog::blog.name'))
            ->data(compact('blog'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(BlogRequest $request)
    {
        
        $blog = $this->repository->newInstance([]);
        return $this->response->title(trans('app.new') . ' ' . trans('blog::blog.name')) 
            ->view('blog::blog.create', true) 
            ->data(compact('blog'))
            ->output();
    }

    /**
     * Create new blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(BlogRequest $request)
    {
        try {
            $attributes              = $request->all(); 
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $blog                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('blog::blog.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('blog/blog/' . $blog->getRouteKey()))
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
    public function edit(BlogRequest $request, Blog $blog)
    {
        return $this->response->title(trans('app.edit') . ' ' . trans('blog::blog.name'))
            ->view('blog::blog.edit', true)
            ->data(compact('blog'))
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
    public function update(BlogRequest $request, Blog $blog)
    {
        try {
            $attributes = $request->all();

            $blog->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('blog::blog.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('blog/blog/' . $blog->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/blog/' . $blog->getRouteKey()))
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
    public function destroy(BlogRequest $request, Blog $blog)
    {
        try {

            $blog->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('blog::blog.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('blog/blog/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/blog/' . $blog->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple blog.
     *
     * @param Model   $blog
     *
     * @return Response
     */
    public function delete(BlogRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('blog::blog.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('blog/blog'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/blog/blog'))
                ->redirect();
        }

    }

    /**
     * Restore deleted blogs.
     *
     * @param Model   $blog
     *
     * @return Response
     */
    public function restore(BlogRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('blog::blog.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/blog/blog'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/blog/blog/'))
                ->redirect();
        }

    }

}
