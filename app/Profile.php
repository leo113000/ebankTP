<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name','telephone','address',"birth_date", 'user_id'
    ];
    /**
     * Relationship one to one with User
     * @return [type] [description]
     */
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
