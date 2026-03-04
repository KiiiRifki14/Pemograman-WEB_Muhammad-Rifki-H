<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/cv');
});

// Route Blog (lama)
Route::get('blog', 'App\Http\Controllers\blogController@home');
Route::get('blog/tentang', 'App\Http\Controllers\blogController@tentang');
Route::get('blog/kontak', 'App\Http\Controllers\blogController@kontak');

// Route CV (baru - Pertemuan 5)
Route::get('cv', 'App\Http\Controllers\CvController@beranda');
Route::get('cv/tentang', 'App\Http\Controllers\CvController@tentang');
Route::get('cv/keahlian', 'App\Http\Controllers\CvController@keahlian');
Route::get('cv/pendidikan', 'App\Http\Controllers\CvController@pendidikan');
Route::get('cv/pengalaman', 'App\Http\Controllers\CvController@pengalaman');
Route::get('cv/kontak', 'App\Http\Controllers\CvController@kontak');
