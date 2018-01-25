<?php
namespace App\Http\Controllers\Redeem;

use App\Http\Controllers\Controller;
use App\Http\Requests\Redeem\RedeemRequest;
use App\Http\Requests\Redeem\RedeemGetRequest;
use App\Http\Requests\Redeem\RedeemCreateRequest;
use App\Http\Requests\Redeem\RedeemUpdateRequest;
use App\Http\Requests\Redeem\RedeemDeleteRequest;
use App\Repository\Redeem\RedeemRepository;

class RedeemController extends Controller
{

    protected $redeem;

    public function __construct(RedeemRepository $redeem)
    {
        $this->redeem = $redeem;
    }
    public function createRedeem(RedeemCreateRequest $request)
    {
        $query = $this->redeem->createData($request->all());
        return response()->json($query); 
    }
    public function getRedeemList(RedeemGetRequest $request)
    {
        $query = $this->redeem->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteRedeem(RedeemDeleteRequest $request)
    {   
        $query = $this->redeem->delete($request->all());
        return response()->json($query);
    }
    public function updateRedeem(RedeemUpdateRequest $request)
    {
        $query = $this->redeem->updateData($request->all());
        return response()->json($query);   
    }

}
