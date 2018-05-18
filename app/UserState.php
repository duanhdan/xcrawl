<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserState extends Model
{
    protected $primaryKey = 'user_id';

	protected $fillable = [
        'user_id', 'workspace_id', 'role_id'
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
