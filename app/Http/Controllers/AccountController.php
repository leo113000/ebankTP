<?php

namespace App\Http\Controllers;

use App\User;
use App\Account as Account;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MovementsController;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $accounts = Account::where('user_id',$user->id)->get();
        //dd($accounts);
        return view('accounts')->with('accounts',$accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $account_number = $Request->input('account_number');
        $Cbu= $Request->input('CBU');
        $user_id=$Request->input('user_id');
        $account_type_id = $Request->input('account_type_id');
        $account_currency_type_id = $Request->input('account_currency_type_id');

        $Account = App\Account::create(
            ['account_number' => $account_number,
            'CBU' => $Cbu,
            'user_id' => $user_id,
            'account_type_id' => $account_type_id,
            'account_currency_type_id' => $account_currency_type_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($number)
    {
        $account = Account::where('account_number',$number)->first();
        if(isset($account)){
            $account->user_id = (new MovementsController)->getByAccount($number);        
        }
        //dd($account);
        return view('account')->with('accounts',$account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  recibe el id para poder traer la info correspondiente
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account recibe el id para poder actualizar la info correspondiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
