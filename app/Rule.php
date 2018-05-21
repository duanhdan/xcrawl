<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
        'workspace_id', 'source_id', 'source_category_id', 'target_id', 'target_category_id', 'post_status', 'status', 'user_id', 'slug_prefix', 'slug_suffix'
    ];

    public function workspace()
    {
    	return $this->belongsTo('App\Workspace', 'workspace_id');
    }

    public function source()
    {
    	return $this->belongsTo('App\Source', 'source_id');
    }

    public function source_category()
    {
        return $this->belongsTo('App\SourceCategory', 'source_category_id');
    }

    public function target()
    {
    	return $this->belongsTo('App\Target', 'target_id');
    }

    public function target_category()
    {
    	return $this->belongsTo('App\TargetCategory', 'target_category_id', 'category_id');
    }
}
