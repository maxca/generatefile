<?php
namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\BrandRequest;
use App\Http\Requests\Brand\BrandGetRequest;
use App\Http\Requests\Brand\BrandCreateRequest;
use App\Http\Requests\Brand\BrandUpdateRequest;
use App\Http\Requests\Brand\BrandDeleteRequest;
use App\Repository\Brand\BrandRepository;

class BrandController extends Controller
{

    protected $brand;

    public function __construct(BrandRepository $brand)
    {
        $this->brand = $brand;
    }
    public function createBrand(BrandCreateRequest $request)
    {
        $query = $this->brand->createData($request->all());
        return response()->json($query); 
    }
    public function getBrandList(BrandGetRequest $request)
    {
        $query = $this->brand->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteBrand(BrandDeleteRequest $request)
    {   
        $query = $this->brand->delete($request->all());
        return response()->json($query);
    }
    public function updateBrand(BrandUpdateRequest $request)
    {
        $query = $this->brand->updateData($request->all());
        return response()->json($query);   
    }

}
