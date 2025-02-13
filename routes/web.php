<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/produk/{produk}', [ProdukCOntroller::class,'show']);
