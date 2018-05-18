<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TargetCategory extends Model
{
    protected $fillable = [
        'target_id', 'category_id', 'parent_category_id', 'name', 'url'
    ];
}
