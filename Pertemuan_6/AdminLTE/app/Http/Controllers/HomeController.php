<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function homeLte()
    {
        return view('homeLte');
    }

    public function myUsers()
    {
        return view('myUsers');
    }
}
