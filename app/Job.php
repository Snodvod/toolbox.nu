<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = ['name', 'difficulty', 'description'];

    public function tools() 
    {
    	return $this->belongsToMany('App\Tool');
    }

    public function expertises()
    {
    	return $this->hasMany('App\Expertise');
    }
}
