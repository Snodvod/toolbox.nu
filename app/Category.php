<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function tools()
    {
    	return $this->hasMany('App\Tool');
    }

    public function jobs()
    {
    	return $this->belongsToMany('App\Job');
    }
}
