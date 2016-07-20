<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Blog\Http\Requests\CategoryUserRequest;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Litecms\Blog\Models\Category;

class CategoryUserController extends BaseController
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
     * Initialize category controller.
     *
     * @param type CategoryRepositoryInterface $category
     *
     * @return type
     */
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->middleware('web');
        $this->middleware('auth:web');
        $this->middleware('auth.active:web');
        $this->setupTheme(config('theme.themes.user.theme'), config('theme.themes.user.layout'));
        $this->repository = $category;
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(CategoryUserRequest $request)
    {
        $this->repository->pushCriteria(new \Litecms\Blog\Repositories\Criteria\CategoryUserCriteria());
        $blog_categories = $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('id', 'DESC');
        })->paginate();

        $this->theme->prependTitle(trans('blog::category.names') . ' :: ');

        return $this->theme->of('blog::user.category.index', compact('blog_categories'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Category $category
     *
     * @return Response
     */
    public function show(CategoryUserRequest $request, Category $category)
    {
        Form::populate($category);

        return $this->theme->of('blog::user.category.show', compact('category'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(CategoryUserRequest $request)
    {

        $category = $this->repository->newInstance([]);
        Form::populate($category);

        return $this->theme->of('blog::user.category.create', compact('category'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(CategoryUserRequest $request)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id();
            $category = $this->repository->create($attributes);

            return redirect(trans_url('/user/blog/category'))
                ->with('message', trans('messages.success.created', ['Module' => trans('blog::category.name')]))
                ->with('code', 201);

        } catch (Exception $e) {
            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Category $category
     *
     * @return Response
     */
    public function edit(CategoryUserRequest $request, Category $category)
    {

        Form::populate($category);

        return $this->theme->of('blog::user.category.edit', compact('category'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param Category $category
     *
     * @return Response
     */
    public function update(CategoryUserRequest $request, Category $category)
    {
        try {
            $this->repository->update($request->all(), $category->getRouteKey());

            return redirect(trans_url('/user/blog/category'))
                ->with('message', trans('messages.success.updated', ['Module' => trans('blog::category.name')]))
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
    public function destroy(CategoryUserRequest $request, Category $category)
    {
        try {
            $this->repository->delete($category->getRouteKey());
            return redirect(trans_url('/user/blog/category'))
                ->with('message', trans('messages.success.deleted', ['Module' => trans('blog::category.name')]))
                ->with('code', 204);

        } catch (Exception $e) {

            redirect()->back()->withInput()->with('message', $e->getMessage())->with('code', 400);

        }
    }
}
