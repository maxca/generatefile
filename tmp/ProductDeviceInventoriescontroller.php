<?php
namespace App\Http\Controllers\Api\Truemoveh;

use App\Http\Controllers\Api\Truemoveh\ApiBaseController;
use App\Http\Requests\ProductDeviceInventoriesRequest;
use App\Repositories\Interfaces\Truemoveh\ProductDeviceInventories\ProductDeviceInventoriesInterface;

class ProductDeviceInventoriesController extends ApiBaseController
{

    protected $interface;
    protected $request;

    public function __construct()
    {
        parent::__construct();
        // $this->brands = $brands;
        // $this->middleware('api.savelogrequest');
    }
    public function index(ProductDeviceInventoriesInterface $interface,ProductDeviceInventoriesRequest $request)
    {

        try {
            $resultData['item'] = $interface->getProductDeviceInventories();

            if (isset($resultData['item']) and count($resultData['item']) > 0) {
                return $this->renderJson('200', $resultData, $request->input('transaction_id'), count($resultData['item']));
            } else {
                return $this->renderJson('404', $resultData, $request->input('transaction_id'), 0, 'Data not found');
            }
        } catch (\Exception $e) {
            return $this->renderJson('400', '', $request->input('transaction_id'), '', $e->getMessage());
        }

    }
}
