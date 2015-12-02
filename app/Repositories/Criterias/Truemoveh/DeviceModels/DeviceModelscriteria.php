<?php
namespace App\Repositories\Criterias\Truemoveh\DeviceModels;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class DeviceModelsCriteria implements CriteriaInterface
{

    public function apply($model, RepositoryInterface $repository)
    {
        $lang = \Input::has('lang') ? \Input::get('lang') : 'all';
        $model = $model->with(['langs' => function ($query) use ($lang) {
            $query->select(['lang', 'name', 'image', 'logo', 'tmh_device_brand_id']);
            if ($lang !== 'all') {
                $query->where('lang', $lang);
            }

        }]);
        $model = $model->whereNull('deleted_at');

        return $model;

    }
}
