<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'workspace_id', 'link_id', 'user_id', 'target_id', 'target_category_id',
        'title', 'slug', 'slug_prefix', 'slug_suffix', 'image', 'description', 'content', 'tags', 'post_status', 'status',
    ];

    public function link()
    {
		return $this->belongsTo('App\Link', 'link_id');
	}

    public function target()
    {
		return $this->belongsTo('App\Target', 'target_id');
	}

	public function category()
    {
		return $this->belongsTo('App\TargetCategory', 'target_category_id');
	}

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
