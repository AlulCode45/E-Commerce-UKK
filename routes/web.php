<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/produk/{id}', function (){
    return view('detail-produk');
});
