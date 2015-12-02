<?php
namespace App\Http\Controllers\Api\Truemoveh;

use App\Http\Controllers\Api\Truemoveh\ApiBaseController;
use App\Http\Requests\DeviceModelsRequest;
use App\Repositories\Interfaces\Truemoveh\DeviceModels\DeviceModelsInterface;

class DeviceModelsController extends ApiBaseController
{

    protected $interface;
    protected $request;

    public function __construct()
    {
        parent::__construct();
        // $this->brands = $brands;
        // $this->middleware('api.savelogrequest');
    }
    public function index(DeviceModelsInterface $interface,DeviceModelsRequest $request)
    {

        try {
            $resultData['item'] = $brands->getLangeDevice();

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
