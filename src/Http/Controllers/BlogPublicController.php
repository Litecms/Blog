<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
use Litecms\Blog\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;
class BlogPublicController extends BaseController
{
    // use BlogWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Blog\Interfaces\BlogRepositoryInterface $blog
     *
     * @return type
     */
    public function __construct(BlogRepositoryInterface $blog, CategoryRepositoryInterface $category)
    {
        $this->repository = $blog;
        $this->category = $category;
        
        parent::__construct();
    }

    /**
     * Show blog's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $blogs = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->pushCriteria(\Litecms\Blog\Repositories\Criteria\BlogPublicCriteria::class)
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::blog.index')
            ->data(compact('blogs'))
            ->output();
    }

    /**
     * Show blog's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $blogs = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::blog.index')
            ->data(compact('blogs'))
            ->output();
    }

    /**
     * Show blog.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $blog = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);
        $blog->increment('viewcount');
        return $this->response->setMetaTitle(trans('blog::blog.name'))
            ->view('blog::blog.show')
            ->data(compact('blog'))
            ->output();
    }

    protected function categorydisplay($slug)
    {
        $category = $this->category->findBySlug($slug);
        
        $blogs = $this->repository->scopeQuery(function($query) use ($category) {
            return $query->orderBy('id','DESC')
                         ->where('category_id', $category['id']);
        })->paginate();

        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::blog.index')
            ->data(compact('blogs'))
            ->output();
    }

    protected function displaybyuser($user_id)
    {
        $blogs = $this->repository->scopeQuery(function($query) use ($user_id) {
            return $query->orderBy('id','DESC')
                         ->where('user_id', $user_id);
        })->paginate();

        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::blog.index')
            ->data(compact('blogs'))
            ->output();
    }
    protected function tagdisplay($tag)
    {

        $blogs = $this->repository->scopeQuery(function($query) use ($tag) {
            return $query->orderBy('id','DESC')
                         ->where('tags', 'like', '%"'.$tag.'"%');
        })->paginate();

        return $this->response->setMetaTitle(trans('blog::blog.names'))
            ->view('blog::blog.index')
            ->data(compact('blogs'))
            ->output();
        
    }

}
