<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
    protected $fillable = ['country', 'place', 'code', 'street', 'number', 'post'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
