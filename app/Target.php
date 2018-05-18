<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Target extends Model
{
    protected $fillable = [
        'workspace_id', 'user_id', 'name', 'url'
    ];

    protected $dates = ['deleted_at'];

    public function categories()
    {
		return $this->hasMany('App\TargetCategory');
	}

	public function user($id = null)
    {
        if (! $id) {
            $id = Auth::id();
        }
        return $this->hasOne('App\TargetUser')->where('user_id', $id);
    }

    public function users()
    {
        return $this->hasMany('App\TargetUser');
    }
}
