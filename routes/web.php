<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
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

Route::get('/siswa',[SiswaController::class,'index']);

Route::get('/siswa/add',[SiswaController::class,'add']);
Route::post('/siswa/store',[SiswaController::class,'store']);

Route::get('/siswa/edit/{id}',[SiswaController::class,'edit']);
Route::put('/siswa/update/{id}',[SiswaController::class,'update']);

Route::get('/siswa/hapus/{id}',[SiswaController::class,'destroy']);
Route::get('/siswa/trash',[SiswaController::class,'trash']);
Route::get('/siswa/restore/{id}',[SiswaController::class,'kembalikan']);


Route::get('/siswa/kembalikan_semua',[SiswaController::class,'kembalikan_semua']);

Route::get('/siswa/hapus_permanen/{id}',[SiswaController::class,'hapus_permanen']);
Route::get('/siswa/hapus_permanen_semua',[SiswaController::class,'hapus_permanen_semua']);
