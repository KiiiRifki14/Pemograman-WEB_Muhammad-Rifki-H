<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cv', function () {
    return view('cv');
});

Route::get('kontak', function () {
    return view('kontak');
});


Route::get('pegawai', 'App\Http\Controllers\Pegawai@halaman');
