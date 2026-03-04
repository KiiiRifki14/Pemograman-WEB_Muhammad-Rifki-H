<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('v_home');
});

Route::get('blog', 'App\Http\Controllers\blogController@home');
Route::get('blog/tentang', 'App\Http\Controllers\blogController@tentang');
Route::get('blog/kontak', 'App\Http\Controllers\blogController@kontak');
