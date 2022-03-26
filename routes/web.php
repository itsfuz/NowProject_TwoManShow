<?php

use App\Http\Controllers\CategoriesController;
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

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/userLogin', [UserController::class, 'login']);

Route::get('/add_product', [UserController::class, 'AddProductPage']);

Route::post('/AddProduct', [ProductController::class, 'AddProduct']);

Route::get('/add_category', [CategoriesController::class,'AddCategoryPage']);

route::post('/AddCategory', [CategoriesController::class, 'AddCategory']);

Route::get('/dashboard', [ProductController::class, 'viewProduct']);

