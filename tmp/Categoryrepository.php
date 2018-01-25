<?php 
namespace App\Repository\Category;

use App\Models\Category\CategoryModel;
use App\Repository\BaseRepository;
use App\Repository\Category\CategoryInterface;

class CategoryRepository extends BaseRepository implements CategoryInterface
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
    protected $classModel = CategoryModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getCategoryByID($id)
    {
        return $this->model->find($id);
    }
   


}
