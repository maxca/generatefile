<?php
namespace App\Repositories\Presenters\Truemoveh\ProductDeviceInventories;

use League\Fractal\TransformerAbstract;

class ProductDeviceInventoriesTransformer extends TransformerAbstract
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
