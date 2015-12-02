<?php
namespace App\Repositories\Presenters\Truemoveh\maxD;

use Prettus\Repository\Presenter\FractalPresenter;

class maxDPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new maxDTransformer();
    }
}
