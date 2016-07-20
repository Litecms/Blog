<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Blog\Http\Requests\BlogAdminRequest;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Models\Blog;

/**
 * Admin web controller class.
 */
class BlogAdminController extends BaseController
{

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    public $guard = 'admin.web';

    /**
     * The home page route of admin.
     *
     * @var string
     */
    public $home = 'admin';

    /**
     * Initialize blog controller.
     *
     * @param type BlogRepositoryInterface $blog
     *
     * @return type
     */
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->middleware('web');
        $this->middleware('auth:admin.web');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        $this->repository = $blog;
        parent::__construct();
    }

    /**
     * Display a list of blog.
     *
     * @return Response
     */
    public function index(BlogAdminRequest $request)
    {
        $pageLimit = $request->input('pageLimit');

        if ($request->wantsJson()) {
            $blogs = $this->repository->setPresenter('\\Litecms\\Blog\\Repositories\\Presenter\\BlogListPresenter')
                ->scopeQuery(function ($query) {
                    return $query->orderBy('posted_on', 'DESC');
                })->paginate($pageLimit);

            $blogs['recordsTotal'] = $blogs['meta']['pagination']['total'];
            $blogs['recordsFiltered'] = $blogs['meta']['pagination']['total'];
            $blogs['request'] = $request->all();
            return response()->json($blogs, 200);

        }

        $this->theme->prependTitle(trans('blog::blog.names') . ' :: ');
        return $this->theme->of('blog::admin.blog.index')->render();
    }

    /**
     * Display blog.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return Response
     */
    public function show(BlogAdminRequest $request, Blog $blog)
    {

        if (!$blog->exists) {
            return response()->view('blog::admin.blog.new', compact('blog'));
        }

        Form::populate($blog);
        return response()->view('blog::admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for creating a new blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(BlogAdminRequest $request)
    {

        $blog = $this->repository->newInstance([]);

        Form::populate($blog);

        return response()->view('blog::admin.blog.create', compact('blog'));

    }

    /**
     * Create new blog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(BlogAdminRequest $request)
    {
        try {
            $attributes = $request->all();
            $attributes['posted_on'] = date('Y-m-d');
            $attributes['user_id'] = user_id('admin.web');
            $blog = $this->repository->create($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('blog::blog.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/blog/blog/' . $blog->getRouteKey()),
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 400,
            ], 400);
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
    public function edit(BlogAdminRequest $request, Blog $blog)
    {
        Form::populate($blog);
        return response()->view('blog::admin.blog.edit', compact('blog'));
    }

    /**
     * Update the blog.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return Response
     */
    public function update(BlogAdminRequest $request, Blog $blog)
    {
        try {

            $attributes = $request->all();

            $blog->update($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('blog::blog.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/blog/blog/' . $blog->getRouteKey()),
            ], 201);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/blog/blog/' . $blog->getRouteKey()),
            ], 400);

        }

    }

    /**
     * Remove the blog.
     *
     * @param Model   $blog
     *
     * @return Response
     */
    public function destroy(BlogAdminRequest $request, Blog $blog)
    {

        try {

            $t = $blog->delete();

            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('blog::blog.name')]),
                'code'     => 202,
                'redirect' => trans_url('/admin/blog/blog/0'),
            ], 202);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/blog/blog/' . $blog->getRouteKey()),
            ], 400);
        }

    }

}
