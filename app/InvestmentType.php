<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvestmentType extends Model
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
     * Relationship one investmentType to many Investements
     * @return The related records
     */
    public function investments(){
    	return $this->hasMany('App\Investment');
    }
}
