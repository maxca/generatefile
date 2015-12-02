<?php
namespace App\Models\{prefix};

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class {replace} extends Model
{
    // or Ardent, Or any other Model Class
	use SoftDeletes;
    protected $fillable = [
        'id',
        'sort',
        'status',
        'discount',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
    protected $table = 'table_name';

    public function langs()
    {
        return $this->hasMany('App\Models\{prefix}\{replace}Lang', 'tmh_banner_device_id', 'id');
    }

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
