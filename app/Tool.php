<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $table = 'tools';

    protected $fillable = ['name', 'brand', 'bought_at', 'about'];

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }
}
