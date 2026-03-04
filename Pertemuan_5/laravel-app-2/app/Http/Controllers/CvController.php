<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function beranda()
    {
        return view('cv.beranda');
    }

    public function tentang()
    {
        return view('cv.tentang');
    }

    public function keahlian()
    {
        return view('cv.keahlian');
    }

    public function pendidikan()
    {
        return view('cv.pendidikan');
    }

    public function pengalaman()
    {
        return view('cv.pengalaman');
    }

    public function kontak()
    {
        return view('cv.kontak');
    }
}
