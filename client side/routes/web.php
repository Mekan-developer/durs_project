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
Route::get('/', [App\Http\Controllers\ContactController::class,'index']);
Route::group([
    'prefix'=>'{lang}',
    'where'=>['lang'=>'[a-zA-Z]{2}']
                        ],function () {

    Route::get('/', [App\Http\Controllers\ContactController::class,'show'])->middleware('setLocale');
});


Route::post('/store',[App\Http\Controllers\ContactController::class,'store']);

