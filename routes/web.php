<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('/login', [\App\Http\Controllers\AuthController::class,'login']);
Route::post('/login', [\App\Http\Controllers\AuthController::class,'loginProcess']);



Route::get('/produk/{produk}', [ProdukController::class,'show']);

Route::middleware(\App\Http\Middleware\AuthMiddleware::class)->group(function () {
    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout']);

    Route::post('checkout',[\App\Http\Controllers\CheckoutController::class,'checkoutPage']);
    Route::get('checkout-done', [\App\Http\Controllers\CheckoutController::class,'checkoutDone']);
    Route::get('/customer', [CustomerController::class,'index']);
});

