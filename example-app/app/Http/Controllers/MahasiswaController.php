<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //memanggil return pada controller
    public function index(){
        $nama = "Neng Ining";
        $hobi=["Memancing", "Memasak", "Mengaji", "Menyanyi"];
        return view ('mahasiswa',['nama'=>$nama, 'hobi'=>$hobi]);


    }

    public function dashboard(){
        return "Ini halaman dashboard mahasiswa";
    }
    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama :".$nama.", Alamat : ".$alamat;
    }

}
