<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected $table='user_status';

    protected $fillable = ['id', 'status', 'name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 
    ];

    public function user(){
        return $this->belongsTo(User::class, 'status');
    }
}
