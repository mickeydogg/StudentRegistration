<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Students;
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
    return view('welcome');
});
Route::get('list',[Students::class,'index']);
Route::get('add',[Students::class,'create']);
Route::post('list',[Students::class,'store']);
Route::post('saved',[studentreg::class,'addData']);