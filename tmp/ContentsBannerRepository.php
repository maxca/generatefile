<?php 
namespace App\Repository\ContentsBanner;

use App\Models\ContentsBanner\ContentsBannerModel;
use App\Repository\BaseRepository;
use App\Repository\ContentsBanner\ContentsBannerInterface;

class ContentsBannerRepository extends BaseRepository implements ContentsBannerInterface
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
    protected $classModel = ContentsBannerModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getContentsBannerByID($id)
    {
        return $this->model->find($id);
    }
   


}
