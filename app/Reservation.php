<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'tool_id', 'start', 'stop'];
    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
    public function tool() 
    {
        return $this->belongsTo('App\Tool');
    }
}
