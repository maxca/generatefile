<?php namespace App\Repositories\Storage\Truemoveh\DeviceModelsV2;

use App\Models\Truemoveh\DeviceModelsV2;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\DeviceModelsV2\DeviceModelsV2RepositoryInterface;
class DeviceModelsV2Repository extends BaseRepository implements DeviceModelsV2RepositoryInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\DeviceModelsV2";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(app('app\Repositories\Criterias\Truemoveh\DeviceModelsV2\\DeviceModelsV2Criteria'));
        $this->applyCriteria();
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\DeviceModelsV2\\DeviceModelsV2Presenter");
        foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
        }
    }


}
