<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function goToLogin(){

        return view('admin.login');
    }

    public function login(Request $request){

        $data = [

            'username' => $request->input('username'),
            'password' => $request->input('password')

        ];

        $checkValidation = auth()->attempt($data);

        if($checkValidation){

            return view('admin_dashboard');
        }
        else{

            return back()->with('notification', 'Account Credentials Doesnt Match!');

        }
    }
}
