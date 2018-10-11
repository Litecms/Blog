<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Blog\Interfaces\TagRepositoryInterface;

class TagPublicController extends BaseController
{
    // use TagWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Tag\Interfaces\TagRepositoryInterface $tag
     *
     * @return type
     */
    public function __construct(TagRepositoryInterface $tag)
    {
        $this->repository = $tag;
        parent::__construct();
    }

    /**
     * Show tag's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $tags = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('blog::tag.names'))
            ->view('blog::public.tag.index')
            ->data(compact('tags'))
            ->output();
    }

    /**
     * Show tag's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $tags = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('blog::tag.names'))
            ->view('blog::public.tag.index')
            ->data(compact('tags'))
            ->output();
    }

    /**
     * Show tag.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $tag = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle($$tag->name . trans('blog::tag.name'))
            ->view('blog::public.tag.show')
            ->data(compact('tag'))
            ->output();
    }

}
