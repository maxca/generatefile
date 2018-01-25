<?php 
namespace App\Repository\Redeem;

use App\Models\Redeem\RedeemModel;
use App\Repository\BaseRepository;
use App\Repository\Redeem\RedeemInterface;

class RedeemRepository extends BaseRepository implements RedeemInterface
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
    protected $classModel = RedeemModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getRedeemByID($id)
    {
        return $this->model->find($id);
    }
   


}
