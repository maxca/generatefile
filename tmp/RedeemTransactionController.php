<?php
namespace App\Http\Controllers\RedeemTransaction;

use App\Http\Controllers\Controller;
use App\Http\Requests\RedeemTransaction\RedeemTransactionRequest;
use App\Http\Requests\RedeemTransaction\RedeemTransactionGetRequest;
use App\Http\Requests\RedeemTransaction\RedeemTransactionCreateRequest;
use App\Http\Requests\RedeemTransaction\RedeemTransactionUpdateRequest;
use App\Http\Requests\RedeemTransaction\RedeemTransactionDeleteRequest;
use App\Repository\RedeemTransaction\RedeemTransactionRepository;

class RedeemTransactionController extends Controller
{

    protected $redeemtransaction;

    public function __construct(RedeemTransactionRepository $redeemtransaction)
    {
        $this->redeemtransaction = $redeemtransaction;
    }
    public function createRedeemTransaction(RedeemTransactionCreateRequest $request)
    {
        $query = $this->redeemtransaction->createData($request->all());
        return response()->json($query); 
    }
    public function getRedeemTransactionList(RedeemTransactionGetRequest $request)
    {
        $query = $this->redeemtransaction->search($request->all())->getData();
        return response()->json($query);   
    }
    public function deleteRedeemTransaction(RedeemTransactionDeleteRequest $request)
    {   
        $query = $this->redeemtransaction->delete($request->all());
        return response()->json($query);
    }
    public function updateRedeemTransaction(RedeemTransactionUpdateRequest $request)
    {
        $query = $this->redeemtransaction->updateData($request->all());
        return response()->json($query);   
    }

}
