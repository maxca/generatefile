<?php
namespace App\Models\Provinces;

use Illuminate\Database\Eloquent\Model;
# use Illuminate\Database\Eloquent\SoftDeletes;

class ProvincesModel extends Model
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
    protected $table = 'provinces';

    

    protected $dates = ['created_at', 'updated_at'];
}
