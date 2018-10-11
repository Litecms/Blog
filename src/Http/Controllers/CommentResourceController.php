<?php

namespace Litecms\Blog\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Blog\Http\Requests\CommentRequest;
use Litecms\Blog\Interfaces\CommentRepositoryInterface;
use Litecms\Blog\Models\Comment;

/**
 * Resource controller class for comment.
 */
class CommentResourceController extends BaseController
{

    /**
     * Initialize comment resource controller.
     *
     * @param type CommentRepositoryInterface $comment
     *
     * @return null
     */
    public function __construct(CommentRepositoryInterface $comment)
    {
        parent::__construct();
        $this->repository = $comment;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Blog\Repositories\Criteria\CommentResourceCriteria::class);
    }

    /**
     * Display a list of comment.
     *
     * @return Response
     */
    public function index(CommentRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Blog\Repositories\Presenter\CommentPresenter::class)
                ->$function();
        }

        $comments = $this->repository->paginate();

        return $this->response->setMetaTitle(trans('blog::comment.names'))
            ->view('blog::comment.index', true)
            ->data(compact('comments'))
            ->output();
    }

    /**
     * Display comment.
     *
     * @param Request $request
     * @param Model   $comment
     *
     * @return Response
     */
    public function show(CommentRequest $request, Comment $comment)
    {

        if ($comment->exists) {
            $view = 'blog::comment.show';
        } else {
            $view = 'blog::comment.new';
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('blog::comment.name'))
            ->data(compact('comment'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new comment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(CommentRequest $request)
    {

        $comment = $this->repository->newInstance([]);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('blog::comment.name')) 
            ->view('blog::comment.create', true) 
            ->data(compact('comment'))
            ->output();
    }

    /**
     * Create new comment.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(CommentRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $comment                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('blog::comment.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('blog/comment/' . $comment->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/blog/comment'))
                ->redirect();
        }

    }

    /**
     * Show comment for editing.
     *
     * @param Request $request
     * @param Model   $comment
     *
     * @return Response
     */
    public function edit(CommentRequest $request, Comment $comment)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('blog::comment.name'))
            ->view('blog::comment.edit', true)
            ->data(compact('comment'))
            ->output();
    }

    /**
     * Update the comment.
     *
     * @param Request $request
     * @param Model   $comment
     *
     * @return Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        try {
            $attributes = $request->all();

            $comment->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('blog::comment.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('blog/comment/' . $comment->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/comment/' . $comment->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the comment.
     *
     * @param Model   $comment
     *
     * @return Response
     */
    public function destroy(CommentRequest $request, Comment $comment)
    {
        try {

            $comment->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('blog::comment.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('blog/comment/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('blog/comment/' . $comment->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple comment.
     *
     * @param Model   $comment
     *
     * @return Response
     */
    public function delete(CommentRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('blog::comment.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('blog/comment'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/blog/comment'))
                ->redirect();
        }

    }

    /**
     * Restore deleted comments.
     *
     * @param Model   $comment
     *
     * @return Response
     */
    public function restore(CommentRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('blog::comment.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/blog/comment'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/blog/comment/'))
                ->redirect();
        }

    }


}
