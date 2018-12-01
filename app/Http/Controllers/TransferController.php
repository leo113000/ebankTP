<?php

namespace App\Http\Controllers;
use App\Transfer as Transfer;
use App\Account as Account;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MovementsController as Movement;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    
    public function index()
    {   
        $transfers = Transfer::orderBY('sender_account_id','DESC')->get();
        return view('transfers')->with('transfers',$transfers);
    }
    public function store(Request $request)
    {
        
        $sender_account_id = $request ->input('sender_account_number');
    	$CBU = $request ->input('cbudestino');
    	$value = $request->input('ammount');    	
        $senderAccount = Account::where('account_number',$sender_account_id)->first();
        $receiverAccount = Account::where('CBU',$CBU)->first();
        //dd($movement);
        if($senderAccount->balance > $value){
        	$Transfer = Transfer::create(
        		['sender_account_id' => $sender_account_id,
        		'CBU'=> $CBU,
        		'value'=>$value,
                'transfer_status_id'=>2,
            ]);
            $out = (new Movement)->store(
                ['value' => $value,
                 'description' => "Transferencia saliente",   
                 'account_id' => $sender_account_id,
                 'movement_type_id' =>2,
                ]);
            $in = (new Movement)->store(
                ['value' => $value,
                 'description' => "Transferencia entrante",   
                 'account_id' => $receiverAccount->account_number,
                 'movement_type_id' =>1,
                ]);
            $senderAccount->balance -= $value;
            $receiverAccount->balance += $value;
            $senderAccount->save();
            $receiverAccount->save();
        }
        return redirect()->route('transfers');
    }
    public function create(){

        $user = Auth::user();
        $account = Account::where('user_id',$user->id)->get();
        $account->each(function($account){
            $account->accountType;
        });
        //dd($account);
        return view('newTransfer')->with('accounts',$account);
    }
}
