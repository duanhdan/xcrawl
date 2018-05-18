<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserState extends Model
{
	protected $fillable = [
        'workspace_id', 'role_id'
    ];

    public function workspace()
    {
    	return $this->belongsTo('App\Workspace');
    }

    public function role()
    {
    	return $this->belongsTo('App\Role');
    }
}