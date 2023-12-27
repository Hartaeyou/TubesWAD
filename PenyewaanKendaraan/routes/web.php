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



// Route::get('/', function (){
//     return view('index');
// });
Route::get('/mobil', [mobilcontroller::class,'index'])->name('mobil');
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/motor', [motorController::class, 'index']);
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/', [AuthController::class, 'login'])->middleware('HaslogIn');
Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name("login-user");
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware("islogIn");
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/tambahmobil', [tambahmobilcontroller::class,'index'])->name('tambahmobil');
Route::get('/lihatmobil', [lihatmobilcontroller::class,'index'])->name('lihatmobil');