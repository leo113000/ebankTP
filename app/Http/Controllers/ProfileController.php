<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile()->getResults();

        return view('modifyUser', [
            'username' => $user->username,
            'dni' => $user->dni,
            'email' => $user->email,
            'name' => $profile->name,
            'last_name' => $profile->last_name,
            'telephone' => $profile->telephone,
            'address' => $profile->address,
            'birth_date' => $profile->birth_date
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile()->getResults();

        $user->username = $request->input("username");
        $user->email = $request->input("email");
        $profile->telephone = $request->input("telephone");

        $user->save();
        $profile->save();

        return $this->edit();
    }
}
