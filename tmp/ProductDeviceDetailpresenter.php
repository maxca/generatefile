<?php
namespace App\Repositories\Presenters\Truemoveh\ProductDeviceDetail;

use Prettus\Repository\Presenter\FractalPresenter;

class ProductDeviceDetailPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProductDeviceDetailTransformer();
    }
}
