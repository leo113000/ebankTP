<?php

namespace App;

use App\Profile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'dni', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Relationship one Profile to one User
     * @return [type] [description]
     */
    public function profile(){
       return $this->hasOne('App\Profile');
    }
    /**
     * Relationship one User to Many accounts
     * @return [type] [description]
     */
    public function accounts(){
        return $this->hasMany('App\Account');
    }
}
