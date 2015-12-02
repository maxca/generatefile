<?php namespace App\Repositories\Storage\Truemoveh\maxD;

use App\Models\Truemoveh\maxD;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Interfaces\Truemoveh\maxD\maxDRepositoryInterface;
class maxDRepository extends BaseRepository implements maxDRepositoryInterface
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Truemoveh\\maxD";
    }
    
    /**
     * [boot automatic boot]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->pushCriteria(app('{criterias}\maxDCriteria'));
        $this->applyCriteria();
    }

    public function presenterMake($data)
    {
        $this->makePresenter("App\\Repositories\\Presenters\\Truemoveh\\maxD\\maxDPresenter");
        foreach ($data as $key => $value) {
            $_j = $this->presenter->present($value);
        }
    }


}
