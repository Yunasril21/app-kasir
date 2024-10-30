<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

route::get('/login', [LoginController::class, 'showLogin'])->name('login');
route::POST('/actionlogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
route::get('/logout', [LoginController::class, 'actionLogout'])->name('actionLogout');

route::middleware('auth')->group(function () {

    route::get('/', [DashboardController::class, 'index']);

    route::get('/user', [UserController::class, 'index']);
    route::get('/user/tambah', [UserController::class, 'create']);
    route::post('/user/simpan', [UserController::class, 'store']);
    route::get('/user/{id}/show', [UserController::class, 'show']);
    route::post('/user/{id}/update', [UserController::class, 'update']);
    route::get('/user/{id}/delete', [UserController::class, 'destroy']);
    
    route::get('/penjualan', [PenjualanController::class, 'index']);
    route::get('/penjualan/tambah', [PenjualanController::class, 'store']);
    route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
    route::get('/penjualan/{id}/show', [PenjualanController::class, 'show']);
    route::get('/penjualan/transaksi/{id}', [PenjualanController::class, 'transaksi']);
    route::post('/penjualan/update/{id}', [PenjualanController::class, 'update']);
    route::get('/penjualan/struk/{id}', [PenjualanController::class, 'struk']);
    
    
    route::get('/pelanggan', [PelangganController::class, 'index']);
    route::get('/pelanggan/tambah', [PelangganController::class, 'create']);
    route::post('/pelanggan/simpan', [PelangganController::class, 'store']);
    route::get('/pelanggan/{id}/show', [PelangganController::class, 'show']);
    route::post('/pelanggan/{id}/update', [PelangganController::class, 'update']);
    route::get('/pelanggan/{id}/delete', [PelangganController::class, 'destroy']);

    route::get('/produk', [ProdukController::class, 'index']);
    route::get('/produk/tambah', [ProdukController::class, 'create']);
    route::post('/produk/simpan', [ProdukController::class, 'store']);
    route::get('/produk/{id}/show', [ProdukController::class, 'show']);
    route::post('/produk/{id}/update', [ProdukController::class, 'update']);
    route::get('/produk/{id}/delete', [ProdukController::class, 'destroy']);

    route::post('/penjualan/scan', [DetailPenjualanController::class, 'store']);
    route::get('/detailpenjualan/delete/{id_produk}/{nobon}', [DetailPenjualanController::class, 'destroy']);

});