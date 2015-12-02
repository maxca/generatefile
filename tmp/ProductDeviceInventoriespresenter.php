<?php
namespace App\Repositories\Presenters\Truemoveh\ProductDeviceInventories;

use Prettus\Repository\Presenter\FractalPresenter;

class ProductDeviceInventoriesPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProductDeviceInventoriesTransformer();
    }
}
