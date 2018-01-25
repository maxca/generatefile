<?php
namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\OrdersRequest;
use App\Http\Requests\Orders\OrdersGetRequest;
use App\Http\Requests\Orders\OrdersCreateRequest;
use App\Http\Requests\Orders\OrdersUpdateRequest;
use App\Http\Requests\Orders\OrdersDeleteRequest;
use App\Repository\Orders\OrdersRepository;

class OrdersController extends Controller
{

    protected $orders;

    public function __construct(OrdersRepository $orders)
    {
        $this->orders = $orders;
    }
    public function createOrders(OrdersCreateRequest $request)
    {
        $query = $this->orders->createData($request->all());
        return response()->json($query); 
    }
    public function getOrdersList(OrdersGetRequest $request)
    {
        $query = $this->orders->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteOrders(OrdersDeleteRequest $request)
    {   
        $query = $this->orders->delete($request->all());
        return response()->json($query);
    }
    public function updateOrders(OrdersUpdateRequest $request)
    {
        $query = $this->orders->updateData($request->all());
        return response()->json($query);   
    }

}
