<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value', 'description', 'account_id', 'movement_type_id'
    ];

    /**
     * Relationship one account to many incomes
     * @return [type] [description]
     */
    public function account(){
    	return $this->belongsTo('App\Account');
    }
    /**
     * Relationship one incomeType to many incomes
     * @return the related record
     */
    public function movementType(){
        return $this->belongsTo('App/MovementType');
    }
}
