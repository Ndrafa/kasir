<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailPenjualanController;

// Route::get('/login', [LoginController::class,'showLogin'])->name('login');
// Route::post('/actionlogin', [LoginController::class,'actionLogin'])->name('actionlogin');
// Route::get('/actionlogout', [LoginController::class,'actionLogout'])->name('actionlogout');

// Route::middleware('auth')->group(function () {

    
    Route::get('/', function () {
    return view('pages.dashboard');
    
    });
        Route::get('/user',[UserController::class, 'index']);
        Route::get('/user/create', [UserController::class, 'create']);
        Route::post('/user/store', [UserController::class, 'store']);
        Route::get('/user/{id}/edit', [UserController::class, 'edit']);
        Route::post('/user/{id}/update', [UserController::class, 'update']);
        Route::get('/user/{id}/delete', [UserController::class, 'destroy']);
        
    Route::get('/pelanggan', [PelangganController::class, 'index']);
    Route::get('/pelanggan/create', [PelangganController::class, 'create']);
    Route::post('/pelanggan/store', [PelangganController::class, 'store']);
    Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit']);
    Route::post('/pelanggan/{id}/update', [PelangganController::class, 'update']);
    Route::get('/pelanggan/{id}/delete', [PelangganController::class, 'destroy']);
    
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
    Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
    Route::get('/produk/{id}/delete', [ProdukController::class, 'destroy']);
    
    Route::get('/penjualan', [PenjualanController::class, 'index']);
    Route::get('/penjualan/create', [PenjualanController::class, 'create']);
    Route::post('/penjualan/store', [PenjualanController::class, 'store']);
    Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
    Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
    Route::get('/penjualan/{id}/delete', [PenjualanController::class, 'destroy']);
    
    Route::get('/detail_penjualan', [DetailPenjualanController::class, 'index']);
    Route::get('/detail_penjualan/create', [DetailPenjualanController::class, 'create']);
    Route::post('/detail_penjualan/store', [DetailPenjualanController::class, 'store']);
    Route::get('/detail_penjualan/{id}/edit', [DetailPenjualanController::class, 'edit']);
    Route::post('/detail_penjualan/{id}/update', [DetailPenjualanController::class, 'update']);
    Route::get('/detail_penjualan/{id}/delete', [DetailPenjualanController::class, 'destroy']);
// });
