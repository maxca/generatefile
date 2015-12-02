<?php namespace App\Repositories\Storage\Truemoveh\DeviceBrands;

use App\Models\Truemoveh\DeviceBrands;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\DeviceBrands\DeviceBrandsRepositoryInterface;
class DeviceBrandsRepository extends BaseRepository implements DeviceBrandsRepositoryInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\DeviceBrands";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(app('app\Repositories\Criterias\Truemoveh\DeviceBrands\\DeviceBrandsCriteria'));
        $this->applyCriteria();
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\DeviceBrands\\DeviceBrandsPresenter");
        foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
        }
    }


}
