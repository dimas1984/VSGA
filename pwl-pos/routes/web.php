<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


// implementasi DBFacade
Route::get('/level',[LevelController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/user',[UserController::class,'index']);


Route::get('/cekobject',[AnggotaController::class,'cekObject']);
Route::get('/insert',[AnggotaController::class,'insert']);
Route::get('/update',[AnggotaController::class,'update']);
Route::get('/delete',[AnggotaController::class,'delete']);
Route::get('/all',[AnggotaController::class,'all']);
Route::get('/find',[AnggotaController::class,'find']);
Route::get('/getWhere',[AnggotaController::class,'getWhere']);

