<?php
namespace App\Repositories\Presenters\Truemoveh\DeviceModels;

use Prettus\Repository\Presenter\FractalPresenter;

class DeviceModelsPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DeviceModelsTransformer();
    }
}
