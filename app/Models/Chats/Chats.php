<?php
namespace App\Models\Chats;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatsModel extends Model
{
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
    protected $table = 'replace';

    

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
