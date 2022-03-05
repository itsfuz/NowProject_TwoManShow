<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [UserController::class, 'goToLogin']);

Route::get('/add_product', function () {

    return view('add_product');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/dashboard', function () {
    return view('admin_dashboard');
});

