<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $table = 'expertises';

    protected $fillable = ['title', 'description'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function job()
    {
    	return $this->belongsTo('App\Job');
    }
}
