<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function goToLogin(){

        return view('login');
    }

    public function login($request){

        $data = [

            'username' => $request->input('username'),
            'password' => $request->input('password')

        ];

        $checkValidation = auth()->attempt($data);

        if($checkValidation){

            return view('dashboard'); //belom bikin
        }
        else{

            return back()->with('notification', 'Account Credentials Doesnt Match!');

        }
    }
}
