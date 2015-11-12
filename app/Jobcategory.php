<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobcategory extends Model
{
	protected $fillable = ['name'];

    public function jobs()
    {
    	return $this->belongsToMany('App\Job');
    }
}
