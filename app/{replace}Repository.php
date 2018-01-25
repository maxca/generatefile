<?php 
namespace App\Repository\{replace};

use App\Models\{replace}\{replace}Model;
use App\Repository\BaseRepository;
use App\Repository\{replace}\{replace}Interface;

class {replace}Repository extends BaseRepository implements {replace}Interface
{
    /**
     * set limit
     * @var integer
     */
    protected $limit = 30;

    /**
     * set order by column
     * @var string
     */
    protected $orderBy = 'id';

    /**
     * set sort type
     * @var string
     */
    protected $sortType = 'desc';    

     /**
     * set class model
     * @var [type]
     */
    protected $classModel = {replace}Model::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function get{replace}ByID($id)
    {
        return $this->model->find($id);
    }
   


}
