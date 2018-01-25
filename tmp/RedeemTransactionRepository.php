<?php 
namespace App\Repository\RedeemTransaction;

use App\Models\RedeemTransaction\RedeemTransactionModel;
use App\Repository\BaseRepository;
use App\Repository\RedeemTransaction\RedeemTransactionInterface;

class RedeemTransactionRepository extends BaseRepository implements RedeemTransactionInterface
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
    protected $classModel = RedeemTransactionModel::class;

    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * get data by id
     * @return object
     */
    public function getRedeemTransactionByID($id)
    {
        return $this->model->find($id);
    }
   


}
