<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('/login', [\App\Http\Controllers\AuthController::class,'login']);
Route::post('/login', [\App\Http\Controllers\AuthController::class,'loginProcess']);
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'registerProcess']);



Route::get('/produk/{produk}', [ProdukController::class,'show']);

Route::middleware(\App\Http\Middleware\AuthMiddleware::class)->group(function () {
    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout']);

    Route::post('checkout',[\App\Http\Controllers\CheckoutController::class,'checkoutPage']);
    Route::post('/checkout-process',[\App\Http\Controllers\CheckoutController::class,'checkoutProcess']);
    Route::get('checkout-done', [\App\Http\Controllers\CheckoutController::class,'checkoutDone']);

    Route::get('/customer', [CustomerController::class,'index']);
    Route::post('/konfirmasi-barang/{id}',[CustomerController::class,'konfirmasiPembelian']);
});
