<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\Blog\Http\Requests\BlogUserApiRequest;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Models\Blog;

/**
 * User API controller class.
 */
class BlogUserApiController extends BaseController
{

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'api';
    /**
     * Initialize blog controller.
     *
     * @param type BlogRepositoryInterface $blog
     *
     * @return type
     */
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->middleware('api');
        $this->middleware('jwt.auth:api');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        $this->repository = $blog;
        parent::__construct();
    }

    /**
     * Display a list of blog.
     *
     * @return json
     */
    public function index(BlogUserApiRequest $request)
    {
        $blogs = $this->repository
            ->pushCriteria(new \Litecms\Blog\Repositories\Criteria\BlogUserCriteria())
            ->setPresenter('\\Litecms\\Blog\\Repositories\\Presenter\\BlogListPresenter')
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->all();
        $blogs['code'] = 2000;
        return response()->json($blogs)
            ->setStatusCode(200, 'INDEX_SUCCESS');

    }

    /**
     * Display blog.
     *
     * @param Request $request
     * @param Model   Blog
     *
     * @return Json
     */
    public function show(BlogUserApiRequest $request, Blog $blog)
    {

        if ($blog->exists) {
            $blog = $blog->presenter();
            $blog['code'] = 2001;
            return response()->json($blog)
                ->setStatusCode(200, 'SHOW_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Show the form for creating a new blog.
     *
     * @param Request $request
     *
     * @return json
     */
    public function create(BlogUserApiRequest $request, Blog $blog)
    {
        $blog = $blog->presenter();
        $blog['code'] = 2002;
        return response()->json($blog)
            ->setStatusCode(200, 'CREATE_SUCCESS');
    }

    /**
     * Create new blog.
     *
     * @param Request $request
     *
     * @return json
     */
    public function store(BlogUserApiRequest $request)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id('admin.api');
            $attributes['user_type'] = user_type();
            $blog = $this->repository->create($attributes);
            $blog = $blog->presenter();
            $blog['code'] = 2004;

            return response()->json($blog)
                ->setStatusCode(201, 'STORE_SUCCESS');
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4004,
            ])->setStatusCode(400, 'STORE_ERROR');
        }

    }

    /**
     * Show blog for editing.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return json
     */
    public function edit(BlogUserApiRequest $request, Blog $blog)
    {

        if ($blog->exists) {
            $blog = $blog->presenter();
            $blog['code'] = 2003;
            return response()->json($blog)
                ->setStatusCode(200, 'EDIT_SUCCESS');
        } else {
            return response()->json([])
                ->setStatusCode(400, 'SHOW_ERROR');
        }

    }

    /**
     * Update the blog.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return json
     */
    public function update(BlogUserApiRequest $request, Blog $blog)
    {
        try {

            $attributes = $request->all();

            $blog->update($attributes);
            $blog = $blog->presenter();
            $blog['code'] = 2005;

            return response()->json($blog)
                ->setStatusCode(201, 'UPDATE_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4005,
            ])->setStatusCode(400, 'UPDATE_ERROR');

        }

    }

    /**
     * Remove the blog.
     *
     * @param Request $request
     * @param Model   $blog
     *
     * @return json
     */
    public function destroy(BlogUserApiRequest $request, Blog $blog)
    {

        try {

            $t = $blog->delete();

            return response()->json([
                'message' => trans('messages.success.delete', ['Module' => trans('blog::blog.name')]),
                'code'    => 2006,
            ])->setStatusCode(202, 'DESTROY_SUCCESS');

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 4006,
            ])->setStatusCode(400, 'DESTROY_ERROR');
        }

    }

}
