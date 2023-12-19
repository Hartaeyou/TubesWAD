<?php

use App\Http\Controllers\mobilcontroller;
use App\Http\Controllers\PembayaranController;
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



Route::get('/pemesanan', function () {
    return view('tampilanPemesanan');
});
Route::get('/mobil', [mobilcontroller::class,'index']);
Route::get('/pembayaran', [PembayaranController::class, 'index']);

