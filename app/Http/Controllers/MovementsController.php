<?php

namespace App\Http\Controllers;

use App\Movement as Movement;
use Illuminate\Http\Request;

class MovementsController extends Controller
{
    public function index()
    {
        $movements = Movement::orderBY('movement_type_id','DESC')->paginate(5);
        $movements->each(function($movements){
        	$movements->account;
        	$movements->movementType;
        });
        return view('movements')-> with('movements',$movements);

    }
    public function getByAccount($id){
        $movements = Movement::where('account_id',$id)->get(); 
        foreach ($movements as $key => $movement) {
            if($movement->movement_type_id ==2 ){
                $movement->value = 0 - $movement->value;
            }
        }
        return $movements;
    }
    public function store($request){
        //dd($request);
    	$Movement = Movement::create(
    		['value'=> $request['value'],
    		 'description'=> $request['description'],
    		 'account_id'=> $request['account_id'],
    		 'movement_type_id'=> $request['movement_type_id'],
    	]);
    }

}
