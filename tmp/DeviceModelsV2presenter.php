<?php
namespace App\Repositories\Presenters\Truemoveh\DeviceModelsV2;

use Prettus\Repository\Presenter\FractalPresenter;

class DeviceModelsV2Presenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DeviceModelsV2Transformer();
    }
}
