<?php

namespace App;

use App\Account;
use App\TransferType;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'value', 'sender_account_id','CBU',
        'transfer_status_id'
    ];

    /**
     * Relationship one account to many outcomes
     * @return [type] [description]
     */
    public function senderAccount(){
    	return $this->belongsTo('App\Account');
    }
    /**
     * Relationship one TransferType to many transfers
     * @return the related record
     */
    public function transferStatus(){
        return $this->belongsTo('App\TransferStatus');
    }
}
