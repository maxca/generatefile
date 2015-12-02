<?php
namespace App\Repositories\Presenters\Truemoveh\maxk;

use Prettus\Repository\Presenter\FractalPresenter;

class maxkPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new maxkTransformer();
    }
}
