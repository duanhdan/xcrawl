<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetUser extends Model
{
    protected $fillable = [
        'target_id', 'user_id', 'username', 'password'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
