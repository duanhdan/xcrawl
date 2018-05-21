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
        return $this->belongsToMany('App\User', 'workspace_user')->withTimestamps();
    }

    public function sources()
    {
        return $this->belongsToMany('App\Source', 'workspace_source')->withTimestamps();
    }

    public function links()
    {
        return $this->belongsToMany('App\Link', 'workspace_link')->withTimestamps();
    }
}
