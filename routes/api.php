<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reg_user;
use App\Http\Controllers\hostel;
use App\Http\Controllers\petcategory;
use App\Http\Controllers\appoinment;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registration',[reg_user::class,'insertdata']);
Route::post('addhostel',[hostel::class,'hosteladd']);
Route::post('addcategory',[petcategory::class,'addpetcategory']);
Route::post('appoinment',[appoinment::class,'addappoinment']);