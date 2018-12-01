<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountCurrencyType extends Model
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
     * Relationship one accountCurrencyType to many accounts
     * @return The related records
     */
    public function accounts(){
    	return $this->hasMany('App\Account');
    }
}
