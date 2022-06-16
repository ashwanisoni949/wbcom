<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;

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

Route::get('/', function () {
    return view('insert');
});
Route::post('store',[PostController::class,'store']);
Route::get('show',[PostController::class,'show']);
Route::get('delete/{id}',[PostController::class,'destroy']);
Route::get('edit/{id?}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']);
Route::view('upload','upload'); //firt wala aapa url ka name aur secod wala blade file name 
Route::post('upload',[UploadController::class,'index']);     //post esiye kyoki form me post diya gay hai
Route::post("users",[PostController::class,'getData']);



