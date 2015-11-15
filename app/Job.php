<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = ['name', 'difficulty', 'description'];

    public function categories() 
    {
    	return $this->belongsToMany('App\Jobcategory');
    }

    public function expertises()
    {
    	return $this->hasMany('App\Expertise');
    }
}
