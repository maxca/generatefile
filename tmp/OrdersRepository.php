<?php 
namespace App\Repository\Orders;

use App\Models\Orders\Orders;
use App\Repository\BaseRepository;
use App\Repository\Orders\OrdersInterface;

class OrdersRepository extends BaseRepository implements OrdersInterface
{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->models();
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function models()
    {
        return app()->make("App\Models\Orders\OrdersModel");
    }
    
   


}
