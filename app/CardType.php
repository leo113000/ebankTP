<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardType extends Model
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
     * Relationship one CardType to many cards
     * @return The related records
     */
    public function cards(){
    	return $this->hasMany('App\Card');
    }
}
