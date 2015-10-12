<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesslevel extends Model
{
    protected $table = 'accesslevels';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
