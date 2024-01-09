<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController22;

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
Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/admin/copy',function(){
//     return view('admin.copy');
// });
 

Route ::group ([
    'middleware'=> ['auth', 'admin'] ] ,
    function () {
        Route::get('/dashboard',[AdminController22::class,'index'])->name('dashboard');
        Route::resource('categories',CategoryController::class);
        Route::resource('products',ProductController::class);
       
    });

    Route::get('/', function () {
        return view('Welcome');
    });
  
