<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Form;
use Litecms\Blog\Http\Requests\CategoryAdminRequest;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Litecms\Blog\Models\Category;

/**
 * Admin web controller class.
 */
class CategoryAdminController extends BaseController
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
     * Initialize category controller.
     *
     * @param type CategoryRepositoryInterface $category
     *
     * @return type
     */
    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->middleware('web');
        $this->middleware('auth:admin.web');
        $this->setupTheme(config('theme.themes.admin.theme'), config('theme.themes.admin.layout'));
        $this->repository = $category;
        parent::__construct();
    }

    /**
     * Display a list of category.
     *
     * @return Response
     */
    public function index(CategoryAdminRequest $request)
    {
        $pageLimit = $request->input('pageLimit');

        if ($request->wantsJson()) {
            $blog_categories = $this->repository
                ->setPresenter('\\Litecms\\Blog\\Repositories\\Presenter\\CategoryListPresenter')
                ->scopeQuery(function ($query) {
                    return $query->orderBy('id', 'DESC');
                })->paginate($pageLimit);

            $blog_categories['recordsTotal'] = $blog_categories['meta']['pagination']['total'];
            $blog_categories['recordsFiltered'] = $blog_categories['meta']['pagination']['total'];
            $blog_categories['request'] = $request->all();
            return response()->json($blog_categories, 200);

        }

        $this->theme->prependTitle(trans('blog::category.names') . ' :: ');
        return $this->theme->of('blog::admin.category.index')->render();
    }

    /**
     * Display category.
     *
     * @param Request $request
     * @param Model   $category
     *
     * @return Response
     */
    public function show(CategoryAdminRequest $request, Category $category)
    {

        if (!$category->exists) {
            return response()->view('blog::admin.category.new', compact('category'));
        }

        Form::populate($category);
        return response()->view('blog::admin.category.show', compact('category'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(CategoryAdminRequest $request)
    {

        $category = $this->repository->newInstance([]);

        Form::populate($category);

        return response()->view('blog::admin.category.create', compact('category'));

    }

    /**
     * Create new category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(CategoryAdminRequest $request)
    {
        try {
            $attributes = $request->all();
            $attributes['user_id'] = user_id('admin.web');
            $category = $this->repository->create($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('blog::category.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/blog/category/' . $category->getRouteKey()),
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => 400,
            ], 400);
        }

    }

    /**
     * Show category for editing.
     *
     * @param Request $request
     * @param Model   $category
     *
     * @return Response
     */
    public function edit(CategoryAdminRequest $request, Category $category)
    {
        Form::populate($category);
        return response()->view('blog::admin.category.edit', compact('category'));
    }

    /**
     * Update the category.
     *
     * @param Request $request
     * @param Model   $category
     *
     * @return Response
     */
    public function update(CategoryAdminRequest $request, Category $category)
    {
        try {

            $attributes = $request->all();

            $category->update($attributes);

            return response()->json([
                'message'  => trans('messages.success.updated', ['Module' => trans('blog::category.name')]),
                'code'     => 204,
                'redirect' => trans_url('/admin/blog/category/' . $category->getRouteKey()),
            ], 201);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/blog/category/' . $category->getRouteKey()),
            ], 400);

        }

    }

    /**
     * Remove the category.
     *
     * @param Model   $category
     *
     * @return Response
     */
    public function destroy(CategoryAdminRequest $request, Category $category)
    {

        try {

            $t = $category->delete();

            return response()->json([
                'message'  => trans('messages.success.deleted', ['Module' => trans('blog::category.name')]),
                'code'     => 202,
                'redirect' => trans_url('/admin/blog/category/0'),
            ], 202);

        } catch (Exception $e) {

            return response()->json([
                'message'  => $e->getMessage(),
                'code'     => 400,
                'redirect' => trans_url('/admin/blog/category/' . $category->getRouteKey()),
            ], 400);
        }

    }

}
