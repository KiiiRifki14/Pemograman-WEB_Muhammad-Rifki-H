<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home-lte', 'App\Http\Controllers\HomeController@homeLte');
Route::get('my-users', 'App\Http\Controllers\HomeController@myUsers');
