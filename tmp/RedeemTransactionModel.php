<?php
namespace App\Models\RedeemTransaction;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class RedeemTransactionModel extends Model
{
	# use SoftDeletes;

    protected $fillable = [
        'id',
        'sort',
        'status',
        'discount',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    protected $table = 'redeem_transaction';

    

    protected $dates = ['created_at', 'updated_at'];
}
