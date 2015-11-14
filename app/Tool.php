<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $table = 'tools';

    protected $fillable = ['name', 'brand', 'bought_at', 'about'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function reservations() 
    {
        return $this->hasMany('App\Reservation');
    }

//    public function loans()
//    {
//        return $this->belongsToMany('App\User', 'user_loans_tool')->withPivot('accepted', 'active', 'start', 'stop');
//    }

}
