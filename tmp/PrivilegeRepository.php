<?php 
namespace App\Repository\Privilege;

use App\Models\Privilege\PrivilegeModel;
use App\Repository\BaseRepository;
use App\Repository\Privilege\PrivilegeInterface;

class PrivilegeRepository extends BaseRepository implements PrivilegeInterface
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
    protected $classModel = PrivilegeModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getPrivilegeByID($id)
    {
        return $this->model->find($id);
    }
   


}
