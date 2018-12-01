<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total', 'account_id', 'investment_type_id'
    ];

    /**
     * Relationship one account to many investments
     * @return [type] [description]
     */
    public function account(){
    	return $this->belongsTo('App\Account');
    }
    /**
     * Relationship one investmentType to many investments
     * @return the related record
     */
    public function investmentType(){
        return $this->belongsTo('App\InvestmentType');
    }

}
