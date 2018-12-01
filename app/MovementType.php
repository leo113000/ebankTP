<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovementType extends Model
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
     * Relationship one IncomeType to many incomes
     * @return The related records
     */
    public function movements(){
    	return $this->hasMany('App\Movement');
    }
}
