<?php namespace App\Repositories\Storage\{prefix}\{replace};

use App\Models\{prefix}\{replace};
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\{prefix}\{replace}\{replace}Interface;
class {replace}Repository extends BaseRepository implements {replace}Interface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\{prefix}\\{replace}";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(new \App\Repositories\Criterias\{prefix}\{replace}\{replace}Criteria);
        $this->applyCriteria();
    }

    public function get{replace}() 
    {
        $limit = (\Input::has('limit')) ? \input::get('limit') : '30';
        $offset = (\Input::has('offset')) ? \input::get('offset') : '0';
        $this->model->take($limit)->skip($offset)->orderBy('created_at', 'desc');
        $data = $this->model->get();
        $res = $this->presenterMake($data);
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\{prefix}\\{replace}\\{replace}Presenter");
         foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
            $_k[$key] = $_j['data'];
        }
        return $_k;
    }


}
