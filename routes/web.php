<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function(){
    Route::get('/layanan', [UserController::class, 'index'])->name('layanan');
   
});

Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class,'login']);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/layanan', [AdminController::class, 'tambah_layanan'])->name('admin.layanan.tambah');
    Route::post('/upload_layanan', [AdminController::class, 'upload_layanan'])->name('admin.layanan.upload');
   
});

Route::prefix('karyawan')->group(function () {
    Route::get('/dashboard', [KaryawanController::class, 'dashboard'])->name('karyawan.dashboard');
   
});
