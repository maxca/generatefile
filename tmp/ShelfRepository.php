<?php 
namespace App\Repository\Shelf;

use App\Models\Shelf\ShelfModel;
use App\Repository\BaseRepository;
use App\Repository\Shelf\ShelfInterface;

class ShelfRepository extends BaseRepository implements ShelfInterface
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
    protected $classModel = ShelfModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getShelfByID($id)
    {
        return $this->model->find($id);
    }
   


}
