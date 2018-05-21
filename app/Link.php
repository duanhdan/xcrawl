<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
	public function source()
    {
        return $this->belongsTo('App\Source', 'source_id');
    }

    public function category()
    {
		return $this->belongsTo('App\SourceCategory', 'source_category_id');
	}

    public function workspace()
    {
        return $this->belongsToMany('App\Workspace', 'workspace_link')->withTimestamps();
    }

    public function pending()
    {
    	return $this->belongsToMany('App\Workspace', 'workspace_link')->wherePivot('status', 0);
    }
}
