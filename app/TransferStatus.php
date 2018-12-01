<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferStatus extends Model
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
     * Relationship one TransferStatus to many tranfers
     * @return The related records
     */
    public function tranfers(){
    	return $this->hasMany('App\Transfer');
    }
}
