<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

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

Route::get('/',[PendudukController::class,'index']);
Route::get('/tambah',[PendudukController::class,'addPenduduk']);
Route::post('/prosestambah',[PendudukController::class,'store']);
Route::get('/edit/{id_penduduk}',[PendudukController::class,'editData']);
Route::get('/delete/{id_penduduk}',[PendudukController::class,'destroy']);
Route::post('/update/{id_penduduk}',[PendudukController::class,'update']);