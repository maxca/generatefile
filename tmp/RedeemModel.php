<?php
namespace App\Models\Redeem;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class RedeemModel extends Model
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
    protected $table = 'redeem';

    

    protected $dates = ['created_at', 'updated_at'];
}
