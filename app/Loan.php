<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
        'amount', 'total_cuotes', 'payed_cuotes','account_id'
    ];

    /**
     * Relationship one account to many loans
     * @return [type] [description]
     */
    public function account(){
    	return $this->belongsTo('App\Account');
    }
}
