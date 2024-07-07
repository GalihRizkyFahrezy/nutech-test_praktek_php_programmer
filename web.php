<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [BarangController::class,'index'])->name('index');
Route::post('/insertbarang',[BarangController::class,'insertbarang'])->name('insertbarang');
Route::post('/insertbarang2',[BarangController::class,'insertbarang2'])->name('insertbarang2');


Route::get('/hapus/{id}',[BarangController::class,'hapus'])->name('hapus');

Route::get('formedit/{id}',[BarangController::class,'formedit'])->name('formedit');
Route::post('editbarang/{id}',[BarangController::class,'editbarang'])->name('formedit');

Route::get('/insertbarangpage',[BarangController::class,'insertbarangpage'])->name('insertbarangpage');