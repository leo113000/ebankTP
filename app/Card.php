<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'number', 'limit', 'account_id','card_type_id'
    ];
    public function getByAccount($id){
        $cards = Card::where('account_id',$id)->get(); 
        return $cards;
    }
    /**
     * Relationship one account to many cards
     * @return [type] [description]
     */
    public function account(){
        return $this->belongsTo('App\Account');
    }
    /**
     * Relationship one cardType to many cards
     * @return the related record
     */
    public function cardType(){
        return $this->belongsTo('App\CardType');
    }
}
