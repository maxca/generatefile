<?php
namespace App\Repositories\Presenters\Truemoveh\DeviceBrands;

use Prettus\Repository\Presenter\FractalPresenter;

class DeviceBrandsPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DeviceBrandsTransformer();
    }
}
