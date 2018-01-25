<?php
namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class BrandModel extends Model
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
    protected $table = 'brand';

    

    protected $dates = ['created_at', 'updated_at'];
}
