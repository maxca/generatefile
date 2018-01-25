<?php 
namespace App\Repository\Brand;

use App\Models\Brand\BrandModel;
use App\Repository\BaseRepository;
use App\Repository\Brand\BrandInterface;

class BrandRepository extends BaseRepository implements BrandInterface
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
    protected $classModel = BrandModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getBrandByID($id)
    {
        return $this->model->find($id);
    }
   


}
