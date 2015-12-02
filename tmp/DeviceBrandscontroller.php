<?php
namespace App\Http\Controllers\Api\Truemoveh;

use App\Http\Controllers\Api\Truemoveh\ApiBaseController;
use App\Http\Requests\DeviceBrandsRequest;
use App\Repositories\Interfaces\Truemoveh\DeviceBrands\DeviceBrandsInterface;

class DeviceBrandsController extends ApiBaseController
{

    protected $interface;
    protected $request;

    public function __construct()
    {
        parent::__construct();
        // $this->brands = $brands;
        // $this->middleware('api.savelogrequest');
    }
    public function index(DeviceBrandsInterface $interface,DeviceBrandsRequest $request)
    {

        return $interface->getLangeDevice();

    }
}
