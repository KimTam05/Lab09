<?php

use App\Http\Controllers\KNTSinhvienController;
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

Route::group(["prefix"=> "sinhvien"], function () {
    Route::get("/",[KNTSinhvienController::class,"index"])->name("KNTSinhvien.index");
    Route::get("/create",[KNTSinhvienController::class,"create"])->name("KNTSinhvien.create");
    Route::post("/create",[KNTSinhvienController::class,"createSubmit"]);
    Route::get("/detail/{id}",[KNTSinhvienController::class,'detail'])->name('KNTSinhvien.detail');
    Route::get('/edit/{id}', [KNTSinhvienController::class,'edit'])->name('KNTSinhvien.edit');
    Route::post('/edit/{id}',[KNTSinhvienController::class, 'editSubmit']);
    Route::get('/delete/{id}',[KNTSinhvienController::class,'delete'])->name('KNTSinhvien.delete')->name('KNTSinhvien.delete');
});
