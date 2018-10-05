<?php

namespace Litecms\Blog\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class CommentPresenter extends FractalPresenter {

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CommentTransformer();
    }
}