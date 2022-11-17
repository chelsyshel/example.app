<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
       //mengambil data dari tabel user
       $pegawai = DB::table('pegawai')->get();
       //mengirim data user ke view index
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }
}
