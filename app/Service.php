<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'service_account_number','total'
    ];

    /**
     * Relationship many accounts to many services called payments
     * @return the related records
     */
    public function payments(){
    	return $this->belongsToMany('App\Account')
    		->as('payments')
    		->withTimestamps();
    }
}
