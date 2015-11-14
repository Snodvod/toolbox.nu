<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['accepted', 'denied', 'read'];
    
    public function reservation() 
    {
        return $this->belongsTo('App\Reservation');
    }
}
