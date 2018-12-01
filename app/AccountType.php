<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'label'
    ];

    /**
     * Relationship one AccountType to many accounts
     * @return The related records
     */
    public function accounts(){
    	return $this->hasMany('App\Account');
    }
}
