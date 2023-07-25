<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('product', ProductController::class);

//route dasar yang memastikan jika belum melakukan login maka langsung diarahkan ke halaman login
Route::get('/', function () { 
    if(Auth::check()){
        return view('jabor/products', ['nama' => 'Jabor']);
    }else{
        return view('auth/login');
    }
});


//route mengarah ke halaman login di views/auth/login.blade.php
Route::get('/login', function () {
    return view('auth/login');
});

//route untuk proses login
Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');
//route untuk logout
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('products/dashboard');
});

Route::get('/galeri', function () {
    return view('products/index1');
});
