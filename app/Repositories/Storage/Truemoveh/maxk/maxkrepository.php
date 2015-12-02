<?php namespace App\Repositories\Storage\Truemoveh\maxk;

use App\Models\Truemoveh\maxk;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\maxk\maxkRepositoryInterface;
class maxkRepository extends BaseRepository implements maxkRepositoryInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\maxk";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(app('app\Repositories\Criterias\Truemoveh\maxk\\maxkCriteria'));
        $this->applyCriteria();
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\maxk\\maxkPresenter");
        foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
        }
    }


}
