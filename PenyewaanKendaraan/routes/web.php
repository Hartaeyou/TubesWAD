<?php

use App\Http\Controllers\lihatmobilcontroller;
use App\Http\Controllers\mobilcontroller;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\motorController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\tambahmobilcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pelangganController;
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
Route::get('/motor', [motorController::class, 'index'])->name('motor');
Route::get('/lihatmotor', [motorController::class, 'show'])->name('lihatmotor');
Route::get('/setailmotor', [motorController::class, 'detail'])->name('detailmotor');
Route::get('/tambahmotor', [motorController::class, 'tambah'])->name('tambahmotor');

// dasheva
Route::get('/mobil', [mobilcontroller::class,'index'])->name('mobil')->middleware("islogIn");
Route::get('/lihatmobil', [mobilcontroller::class,'indexlihat'])->name('lihatmobil')->middleware("islogIn");
Route::get('/updatemobil/{id}', [mobilcontroller::class, 'edit'])->name('updatemobil')->middleware("islogIn");
Route::get('/updatedmobil/{id}', [mobilcontroller::class, 'update'])->name ('update')->middleware("islogIn");
Route::get('/tambahmobil', [mobilcontroller::class,'indextambah'])->name('tambahmobil')->middleware("islogIn");
Route::post('/tambahmobil-baru', [mobilcontroller::class,'store'])->name('tambahmobil-baru')->middleware("islogIn");
Route::get('/delete-mobil/{id}', [mobilcontroller::class,'delete'])->name('delete')->middleware("islogIn");

//login register(farabi)
Route::get('/', [AuthController::class, 'login'])->middleware('HaslogIn');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->middleware('HaslogIn');
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name("login-user");
Route::get('/logout', [AuthController::class, 'logout']);

// farabi
Route::get('/pemesanan', [PemesananController::class, 'index'])->middleware("islogIn");
Route::post('/formSubmit', [PemesananController::class, 'formSubmit'])->name('formSubmit')->middleware("islogIn");
Route::get('/tablePemesanan', [PemesananController::class, 'showTable'])->middleware("islogIn")->name("tablePemesanan");
Route::get('/formUpdatePemesanan/{id}', [PemesananController::class, 'formUpdate'])->name("formUpdatePemesanan")->middleware("islogIn");
Route::get('/updatedData/{id}', [PemesananController::class, 'update'])->name("updatedData")->middleware("islogIn");
Route::get('/delete/{id}', [PemesananController::class, 'delete'])->name("delete")->middleware("islogIn");

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware("islogIn");

// Rismawan
Route::get('/pembayaran', [PembayaranController::class, 'index']);

// Ghifary
Route::get('/admin', [adminController::class, 'index']);

// azri
Route::get('/tambahPelanggan', [pelangganController::class, 'index']);
Route::get('/tabelPelanggan', [pelangganController::class, 'showTabelPelanggan']);
Route::get('/detailPelanggan', [pelangganController::class, 'showDetail']);
Route::get('/editPelanggan', [pelangganController::class, 'showEdit']);
Route::get('/homePelanggan', [pelangganController::class, 'showHome']);
Route::get('/tambahPelangganBaru',[pelangganController::class,'formTambah'])->name('tambahPelangganBaru');