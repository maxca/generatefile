<?php 
namespace App\Repository\PrivilegeShelf;

use App\Models\PrivilegeShelf\PrivilegeShelfModel;
use App\Repository\BaseRepository;
use App\Repository\PrivilegeShelf\PrivilegeShelfInterface;

class PrivilegeShelfRepository extends BaseRepository implements PrivilegeShelfInterface
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
    protected $classModel = PrivilegeShelfModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getPrivilegeShelfByID($id)
    {
        return $this->model->find($id);
    }
   


}
