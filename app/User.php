<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'address', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function tools()
    {
        return $this->hasMany('App\Tool');
    }

    public function expertises()
    {
        return $this->hasMany('App\Expertise');
    }

    public function accesslevel()
    {
        return $this->belongsTo('App\Accesslevel');
    }
    
    public function reservations() 
    {
        return $this->hasMany('App\Reservation');
    }
//    // many to many tools for loans
//    public function loans()
//    {
//        return $this->belongsToMany('App\Tool', 'user_loans_tool')->withPivot('accepted', 'active', 'start', 'stop');
//    }
}
