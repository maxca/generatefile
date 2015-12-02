<?php namespace App\Repositories\Storage\Truemoveh\DeviceModels;

use App\Models\Truemoveh\DeviceModels;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\DeviceModels\DeviceModelsRepositoryInterface;
class DeviceModelsRepository extends BaseRepository implements DeviceModelsRepositoryInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\DeviceModels";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(app('app\Repositories\Criterias\Truemoveh\DeviceModels\\DeviceModelsCriteria'));
        $this->applyCriteria();
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\DeviceModels\\DeviceModelsPresenter");
        foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
        }
    }


}
