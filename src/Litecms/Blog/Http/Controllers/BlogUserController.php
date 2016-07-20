<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Blog\Http\Requests\BlogUserRequest;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Models\Blog;

class BlogUserController extends BaseController
{

    /**
     * The authentication guard that should be used.
     *
     * @var string
     */
    protected $guard = 'web';

    /**
     * The home page route of user.
     *
     * @var string
     */
    protected $home = 'home';
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
        $this->middleware('auth:web');
        $this->middleware('auth.active:web');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        $this->repository = $blog;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(BlogUserRequest $request)
    {
        $this->repository->pushCriteria(new \Litecms\Blog\Repositories\Criteria\BlogUserCriteria());
        $blogs = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('posted_on', 'DESC');

        })->paginate();

        $this->theme->prependTitle(trans('blog::blog.names') . ' :: ');

        return $this->theme->of('blog::user.blog.index', compact('blogs'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Blog $blog
     *
     * @return Response
     */
    public function show(BlogUserRequest $request, Blog $blog)
    {
        Form::populate($blog);
        $latest = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'DESC')
                ->take(3);

        })->all();

        return $this->theme->of('blog::user.blog.show', compact('blog', 'latest'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(BlogUserRequest $request)
    {

        $blog = $this->repository->newInstance([]);
        Form::populate($blog);

        return $this->theme->of('blog::user.blog.create', compact('blog'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(BlogUserRequest $request)
    {
        try {

            $attributes = $request->all();
            $attributes['posted_on'] = date('Y-m-d');
            $attributes['user_id'] = user_id();

            $blog = $this->repository->create($attributes);

            return redirect(trans_url('/user/blog/blog'))
                ->with('message', trans('messages.success.created', ['Module' => trans('blog::blog.name')]))
                ->with('code', 201);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Blog $blog
     *
     * @return Response
     */
    public function edit(BlogUserRequest $request, Blog $blog)
    {

        Form::populate($blog);

        return $this->theme->of('blog::user.blog.edit', compact('blog'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param Blog $blog
     *
     * @return Response
     */
    public function update(BlogUserRequest $request, Blog $blog)
    {
        try {
            $attributes = $request->all();
            $attributes['published'] = 'No';
            $this->repository->update($attributes, $blog->getRouteKey());

            return redirect(trans_url('/user/blog/blog'))
                ->with('message', trans('messages.success.updated', ['Module' => trans('blog::blog.name')]))
                ->with('code', 204);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(BlogUserRequest $request, Blog $blog)
    {
        try {
            $this->repository->delete($blog->getRouteKey());
            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('blog::blog.name')]),
                'code'     => 202,
                'redirect' => trans_url('/user/blog/blog'),
            ], 202);

        } catch (Exception $e) {

            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);

        }
    }

    /**
     * take blogs category
     * @param type $category
     * @return type
     */

    protected function category($category)
    {
        $blogs = $this->repository->category($category);

        return $this->theme->of('blog::user.blog.index', compact('blogs'))->render();

    }

}
