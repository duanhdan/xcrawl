<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetUser extends Model
{
    protected $fillable = [
        'target_id', 'user_id', 'username', 'password'
    ];
}
