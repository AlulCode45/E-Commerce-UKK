<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('/login', [\App\Http\Controllers\AuthController::class,'login']);
Route::post('/login', [\App\Http\Controllers\AuthController::class,'loginProcess']);



Route::get('/produk/{produk}', [ProdukCOntroller::class,'show']);

Route::middleware(\App\Http\Middleware\AuthMiddleware::class)->group(function () {
    Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout']);

    Route::get('checkout',[\App\Http\Controllers\CheckoutController::class,'checkoutPage']);
    Route::get('/customer', [CustomerController::class,'index']);
});

