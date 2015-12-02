<?php
namespace App\Repositories\Criterias\Truemoveh\ProductDeviceInventories;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class ProductDeviceInventoriesCriteria implements CriteriaInterface
{

    public function apply($model, RepositoryInterface $repository)
    {
        $lang = \Input::has('lang') ? \Input::get('lang') : 'all';
        $name = \Input::has('name') ? \Input::get('name') : null;
        $model = $model->with(['langs' => function ($query) use ($lang) {
            $query->select(['lang', 'name', 'image', 'logo', 'tmh_device_brand_id']);
            if ($lang !== 'all') {
                $query->where('lang', $lang);
            }

        }]);

         $model = $model->wherehas('langs', function ($query) use ($lang, $name) {
            if ($lang !== 'all') {
                $query->where('lang', $lang);
            }
            if (!is_null($name)) {
                $query->where('name', 'LIKE', "%{$name}%");
            }
        });
        $model = $model->whereNull('deleted_at');


        return $model;

    }
}
