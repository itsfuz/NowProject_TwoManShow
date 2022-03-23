<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


Route::get('/', [ProductController::class, 'goToHome']);

Route::get('/login', [UserController::class, 'goToLogin']);

Route::get('/product_detail', function () {
    return view('product_detail');
});

// Route::get('/dashboard', function () {
//     return view('admin_dashboard');
// })->middleware('Admin');

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/userLogin', [UserController::class, 'login']);

Route::get('/dashboard', function () {
    return view('admin.view_products');
});

Route::get('/add_product', function () {
    return view('admin.add_product');
});

Route::get('/add_category', function () {
    return view('admin.add_category');
});


