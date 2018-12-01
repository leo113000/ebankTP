<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Account;
use App\Card as Card;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'dni' => 'required|string|min:7|max:8|unique:users',
            'password' => 'required|string|min:4|max:4|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'dni' => $data['dni'],
            'password' => Hash::make($data['password'])
        ]);

        Profile::create([
            'name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'telephone' => $data['telephone'],
            'address' => '',
            'birth_date' => $data['birth_date'],
            'user_id' => $user->id
        ]);

        $pesosAccountNumber = time();
        $dollarsAccountNumber = time()+1; // Soy Lisotti y yo codee esto. Besis

        //pesos account
        Account::create([
            'account_number' => $pesosAccountNumber,
            'balance' => 2300,
            'CBU' => (786 . 3002 . 9 . $pesosAccountNumber . 2),
            'user_id' => $user->id,
            'account_type_id' => 1,
            'account_currency_type_id' => 1,
        ]);
        //dollar account
        Account::create([
            'account_number' => $dollarsAccountNumber,
            'balance' => 420,
            'CBU' => (786 . 3002 . 9 . $dollarsAccountNumber . 2),
            'user_id' => $user->id,
            'account_type_id' => 1,
            'account_currency_type_id' => 2,
        ]);
        //Debit card creation
        Card::create([
            'number' => rand ( 1000000000000000 , 9999999999999),
            'limit' => 10000,
            'account_id' => $pesosAccountNumber,
            'card_type_id' => 1
        ]);
        return $user;
    }
}
