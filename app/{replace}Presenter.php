<?php
namespace App\Repositories\Presenters\{prefix}\{replace};

use Prettus\Repository\Presenter\FractalPresenter;

class {replace}Presenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new {replace}Transformer();
    }
}
