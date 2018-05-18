<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Target extends Model
{
    protected $fillable = [
        'user_id', 'name', 'url', 'username', 'password'
    ];

    protected $dates = ['deleted_at'];

    public function categories()
    {
		return $this->hasMany('App\TargetCategory');
	}
}
