<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reg_user; 

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('registration');
});

// Route::post('insert',[reg_user::class,'insertdata']);