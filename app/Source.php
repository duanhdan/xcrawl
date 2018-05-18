<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'name', 'url', 'status'
    ];

    public function categories()
    {
    	return $this->hasMany('App\SourceCategory', 'source_id');
    }
}
