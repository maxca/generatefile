<?php namespace App\Repositories\Storage\Truemoveh\ProductDeviceInventories;

use App\Models\Truemoveh\ProductDeviceInventories;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\ProductDeviceInventories\ProductDeviceInventoriesInterface;
class ProductDeviceInventoriesRepository extends BaseRepository implements ProductDeviceInventoriesInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\ProductDeviceInventories";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(new \App\Repositories\Criterias\Truemoveh\ProductDeviceInventories\ProductDeviceInventoriesCriteria);
        $this->applyCriteria();
    }

    public function getProductDeviceInventories() 
    {
        $limit = (\Input::has('limit')) ? \input::get('limit') : '30';
        $offset = (\Input::has('offset')) ? \input::get('offset') : '0';
        $this->model->take($limit)->skip($offset)->orderBy('created_at', 'desc');
        $data = $this->model->get();
        $res = $this->presenterMake($data);
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\ProductDeviceInventories\\ProductDeviceInventoriesPresenter");
         foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
            $_k[$key] = $_j['data'];
        }
        return $_k;
    }


}
