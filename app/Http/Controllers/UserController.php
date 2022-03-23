<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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

            return view('admin.view_products');
        }
        else{

            return back()->with('notification', 'Account Credentials Doesnt Match!');

        }
    }

    public function logout(){

        auth()->logout();

        return view('admin.login');
    }

    public function AddProductPage(){

        $categories = Categories::All();

        return view('admin.add_product')->with('categories', $categories);
    }
}
