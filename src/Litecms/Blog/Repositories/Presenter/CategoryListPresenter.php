<?php

namespace Litecms\Blog\Repositories\Presenter;

use Litepie\Repository\Presenter\FractalPresenter;

class CategoryListPresenter extends FractalPresenter
{

    /**
     * Prepare data to present
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryListTransformer();
    }
}
