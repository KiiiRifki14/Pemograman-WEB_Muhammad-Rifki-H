<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('pegawai', 'App\Http\Controllers\PegawaiController@index' );
Route::get('pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah' );
Route::post('pegawai/store', 'App\Http\Controllers\PegawaiController@store' );
Route::get('pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit' );    
Route::post('pegawai/update', 'App\Http\Controllers\PegawaiController@update' );
Route::get('pegawai/hapus/{id}', 'App\Http\Controllers\PegawaiController@hapus' );
