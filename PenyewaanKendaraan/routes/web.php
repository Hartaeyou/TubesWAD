<?php

use App\Http\Controllers\lihatmobilcontroller;
use App\Http\Controllers\mobilcontroller;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\tambahmobilcontroller;
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




// devi
Route::get('/motor', [motorController::class, 'index']);

// dasheva
Route::get('/mobil', [mobilcontroller::class,'index'])->name('mobil');
Route::get('/lihatmobil', [mobilcontroller::class,'indexlihat'])->name('lihatmobil');
Route::get('/detail', [mobilcontroller::class, 'detail' ])->name('detail');
Route::get('/tambahmobil', [mobilcontroller::class,'indextambah'])->name('tambahmobil');
Route::post('/tambahmobil-baru', [mobilcontroller::class,'store'])->name('tambahmobil-baru');

//login register(farabi)
Route::get('/', [AuthController::class, 'login'])->middleware('HaslogIn');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->middleware('HaslogIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name("login-user");
Route::get('/logout', [AuthController::class, 'logout']);

// farabi
Route::get('/pemesanan', [PemesananController::class, 'index'])->middleware("islogIn");
Route::post('/formSubmit', [PemesananController::class, 'formSubmit'])->name('formSubmit');
Route::get('/tablePemesanan', [PemesananController::class, 'showTable'])->middleware("islogIn");

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware("islogIn");

// Rismawan
Route::get('/tempatPembayaran', [PembayaranController::class, 'index'])->name('tempatPembayaran');
Route::get('/pembayaran/lunaskan/{id}', [PembayaranController::class, 'lunaskan'])->name('lunaskan');
Route::get('/pembayaran/processPayment/{id}', [PembayaranController::class, 'processPayment'])->name('processPayment');

