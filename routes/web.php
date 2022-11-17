<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\safaatController;
use App\Http\Controllers\PegawaiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/stmik',[safaatController::class, 'index']);

Route::get('/registrasi',[safaatController::class, 'login']);
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');