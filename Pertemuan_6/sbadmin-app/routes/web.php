<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('my-home', 'App\Http\Controllers\HomeController@myHome');
Route::get('my-users', 'App\Http\Controllers\HomeController@myUsers');
