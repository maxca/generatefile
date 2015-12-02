<?php namespace App\Repositories\Storage\Truemoveh\ProductDeviceDetail;

use App\Models\Truemoveh\ProductDeviceDetail;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\ProductDeviceDetail\ProductDeviceDetailInterface;
class ProductDeviceDetailRepository extends BaseRepository implements ProductDeviceDetailInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\ProductDeviceDetail";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(new \App\Repositories\Criterias\Truemoveh\ProductDeviceDetail\ProductDeviceDetailV2Criteria);
        $this->applyCriteria();
    }

    public function get{Replace}() 
    {
        $limit = (\Input::has('limit')) ? \input::get('limit') : '30';
        $offset = (\Input::has('offset')) ? \input::get('offset') : '0';
        $this->model->take($limit)->skip($offset)->orderBy('created_at', 'desc');
        $data = $this->model->get();
        $res = $this->presenterMake($data);
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\ProductDeviceDetail\\ProductDeviceDetailPresenter");
         foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
            $_k[$key] = $_j['data'];
        }
        return $_k;
    }


}
