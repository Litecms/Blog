<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Blog\Interfaces\BlogRepositoryInterface;
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
    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->repository = $blog;
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
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('blog::blog.names'))
            ->view('blog::public.blog.index')
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


        return $this->response->title(trans('blog::blog.names'))
            ->view('blog::public.blog.index')
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

        return $this->response->title(trans('blog::blog.name'))
            ->view('blog::public.blog.show')
            ->data(compact('blog'))
            ->output();
    }

    protected function categorydisplay($key)
    {
        $category_id = DB::table('blog_categories')->select('id')->where('slug','=', $key)->get();
        foreach($category_id as $key)
        {
            $category_id = $key->id;
        }
        $blogs = $this->repository->scopeQuery(function($query) use ($category_id) {
            return $query->orderBy('id','DESC')
                         ->where('category_id', $category_id);
        })->paginate();

        return $this->response->title(trans('blog::blog.names'))
            ->view('blog::public.blog.index')
            ->data(compact('blogs'))
            ->output();
    }

    protected function displaybyuser($user_id)
    {
        $blogs = $this->repository->scopeQuery(function($query) use ($user_id) {
            return $query->orderBy('id','DESC')
                         ->where('user_id', $user_id);
        })->paginate();

        return $this->response->title(trans('blog::blog.names'))
            ->view('blog::public.blog.index')
            ->data(compact('blogs'))
            ->output();
    }
    protected function tagdisplay($tag)
    {

        $blogs = $this->repository->scopeQuery(function($query) use ($tag) {
            return $query->orderBy('id','DESC')
                         ->where('tags', 'like', '%"'.$tag.'"%');
        })->paginate();

        return $this->response->title(trans('blog::blog.names'))
            ->view('blog::public.blog.index')
            ->data(compact('blogs'))
            ->output();
        
    }

}
