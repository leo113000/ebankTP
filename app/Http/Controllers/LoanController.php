<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //It will be like some kind of self transferencen and it will be showed on the movements
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amount = $Request->input('amount');
        $total_cuotes = $Request->input('total_cuotes');
        $payed_cuotes = $Request->input('payed_cuotes');
        $account_id =$Request->input('account_id');

        $loan = App\Loan::create(
            ['amount' => $amount,
            'accototal_cuotes' => $total_cuotes,
            'payed_cuotes' => $payed_cuotes,
            'account_id' => $account_id,]);
    }

   
    public function show(Loan $loan)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  recibe el id para poder actualizar la info correspondiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
