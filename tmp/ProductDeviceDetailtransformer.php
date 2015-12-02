<?php
namespace App\Repositories\Presenters\Truemoveh\ProductDeviceDetail;

use League\Fractal\TransformerAbstract;

class ProductDeviceDetailTransformer extends TransformerAbstract
{

    public function transform($data)
    {
       if (!is_array($data)) {
            $data = $data->toArray();
        }
        $data += $data['langs'][0];
        unset($data['langs']);
        // dd($data);
        return $data;
    }
}
