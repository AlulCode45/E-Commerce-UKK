<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/produk/{id}', function (){
    return view('detail-produk');
});
