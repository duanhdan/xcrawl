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

    public function workspace($id = null)
    {
        if ($id)
            return $this->belongsToMany('App\Workspace', 'workspace_link')->wherePivot('workspace_id', $id)->withPivot('status')->first();
        else
            return $this->belongsToMany('App\Workspace', 'workspace_link');
    }

    public function pending()
    {
        return $this->belongsToMany('App\Workspace', 'workspace_link')->wherePivot('status', 0);
    }

    public function wrote()
    {
        return $this->belongsToMany('App\Workspace', 'workspace_link')->wherePivot('status', 2);
    }

    public function processed()
    {
        return $this->belongsToMany('App\Workspace', 'workspace_link')->wherePivot('status', 1);
    }

    public function failed()
    {
        return $this->belongsToMany('App\Workspace', 'workspace_link')->wherePivot('status', -1);
    }

    public function status($status_code)
    {
        $status = 'Pending';

        if ($status_code == 1) {
            $status = 'Processed';
        }
        else if ($status_code == 2) {
            $status = 'Wrote';
        }
        else if ($status_code == -1) {
            $status = 'Failed';
        }

        return $status;
    }

    public function badge($status_code)
    {
        $status = 'badge-warning';

        if ($status_code == 1) {
            $status = 'badge-success';
        }
        else if ($status_code == 2) {
            $status = 'badge-info';
        }
        else if ($status_code == -1) {
            $status = 'badge-danger';
        }

        return $status;
    }
}
