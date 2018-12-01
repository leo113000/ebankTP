<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_number','balance', 'CBU', 'user_id','account_type_id','account_currency_type_id'
    ];
    /**
     * Relationship one user to many accounts
     * @return the related record
     */
    public function user(){
    	return $this->belongsTo('App\User');
    }
    /**
     * Relationship one accountType to many accounts
     * @return the related record
     */
    public function accountType(){
    	return $this->belongsTo('App\AccountType');
    }
    /**
     * Relationship one accountCurrencyType to many accounts
     * @return the related record
     */
    public function accountCurrencyType(){
    	return $this->belongsTo('App\accountCurrencyType');
    }
    /**
     * Relationship one account to many incomes
     * @return the related records
     */
    public function incomes(){
    	return $this->hasMany('App\Income');
    }
    /**
     * Relationship one account to many outcomes
     * @return the related records
     */
    public function outcomes(){
    	return $this->hasMany('App\Outcome');
    }
   	/**
     * Relationship one account to many loans
     * @return the related records
     */
    public function loans(){
    	return $this->hasMany('App\Loan');
    }
    /**
     * Relationship one account to many investments
     * @return the related records
     */
    public function investments(){
    	return $this->hasMany('App\Investment');
    }
    /**
     * Relationship one account to many cards
     * @return the related records
     */
    public function cards(){
    	return $this->hasMany('App\Card');
    }
    /**
     * Relationship many services to many accounts called payments
     * @return the related records
     */
    public function payments(){
    	return $this->belongsToMany('App/Service')
    		->as('payments')
    		->withTimestamps();
    }
}
