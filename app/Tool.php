<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $table = 'tools';

    protected $fillable = ['name', 'brand', 'type', 'bought_at', 'about'];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function jobs()
    {
    	return $this->belongsToMany('App\Job');
    }
}
