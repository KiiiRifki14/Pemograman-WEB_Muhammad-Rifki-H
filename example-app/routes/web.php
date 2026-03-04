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
Route::get('mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::get('mahasiswadashboard', 'App\Http\Controllers\MahasiswaController@dashboard');
Route::get('pegawai', 'App\Http\Controllers\Pegawai@halaman');
Route::get('formulir', 'App\Http\Controllers\MahasiswaController@formulir');
Route::post('formulir/proses', 'App\Http\Controllers\MahasiswaController@proses');
