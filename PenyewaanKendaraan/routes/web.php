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
use App\Http\Controllers\MitraController;

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
Route::get('/motor', [motorController::class, 'index'])->name('motor')->middleware("islogIn");
Route::get('/listmotor', [MotorController::class, 'list'])->name('listmotor')->middleware("islogIn");
Route::get('/lihatmotor', [motorController::class, 'show'])->name('lihatmotor')->middleware("islogIn");
Route::get('/tambahmotor', [motorController::class, 'tambah'])->name('tambahmotor')->middleware("islogIn");
Route::post('/motor', [motorController::class, 'store'])->name('motor.store')->middleware("islogIn");
Route::get('/updatemotor/{id}', [MotorController::class, 'update'])->name('updatemotor')->middleware("islogIn");
Route::post('/updatemotor/{id}', [MotorController::class, 'updateMotor'])->name('updateMotor')->middleware("islogIn");
Route::delete('/delete-motor/{id}', [MotorController::class, 'delete'])->name('deleteMotor')->middleware("islogIn");
Route::get('/detailmotor/{id}', [MotorController::class, 'detailmotor'])->name('detailmotor')->middleware("islogIn");

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
Route::get('/pembayaran/delete/{id}', [PembayaranController::class, 'deleteOrder'])->name('deleteOrder');

// Ghifary
Route::get('/admin', [AdminController::class, 'index'])->name('admin.view');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

// azri
Route::get('/tambahPelanggan', [pelangganController::class, 'index'])->name('tambahPelanggan')->middleware("islogIn");
Route::get('/tabelPelanggan', [pelangganController::class, 'showTabelPelanggan'])->name('tabelPelanggan')->middleware("islogIn");
Route::get('/detailPelanggan/{id}', [pelangganController::class, 'showDetail'])->name('detailPelanggan')->middleware("islogIn");
Route::get('/ubahData/{id}', [pelangganController::class, 'ubah'])->name('ubahData')->middleware("islogIn");
Route::get('/hapusData/{id}', [pelangganController::class, 'hapus'])->name('hapusData')->middleware("islogIn");
Route::get('/homePelanggan', [pelangganController::class, 'showHome'])->name('homePelanggan')->middleware("islogIn");
Route::get('/tambahPelangganBaru',[pelangganController::class,'formTambah'])->name('tambahPelangganBaru')->middleware("islogIn");

//Hafizh
Route::resource('/mitra', MitraController::class)->middleware("islogIn");