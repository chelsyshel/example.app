<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class safaatController extends Controller
{
     public function index()
    {
        return view('stmik');
    }
     public function login()
    {
        return view('registrasi');
    } 
}
