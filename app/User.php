<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function state()
    {
        return $this->hasOne('App\UserState', 'user_id');
    }

    public function role($workspace_id)
    {
        return $this->belongsToMany('App\Role', 'workspace_user')->wherePivot('workspace_id', $workspace_id)->first();
    }

    public function workspaces()
    {
        return $this->belongsToMany('App\Workspace', 'workspace_user');
    }

    public function currentWorkspace()
    {
        return $this->belongsToMany('App\Workspace', 'user_states')->first();
    }

    public function currentRole()
    {
        return $this->belongsToMany('App\Role', 'user_states')->first();
    }
}
