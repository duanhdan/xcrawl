<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status'
    ];

    public function users()
    {
    	return $this->belongsToMany('App\User', 'workspace_user');
    }
}
