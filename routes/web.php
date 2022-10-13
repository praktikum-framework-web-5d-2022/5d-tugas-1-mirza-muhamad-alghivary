<?php

use Illuminate\Support\Facades\Route;

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
Route::redirect('/','/dosen');

Route::get('/dosen', function(){
    $dosens = ["Intan","Iqbal","Ratna","Rini","Adhi","Arip","Asep","Aji","Garno","Susi"];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Mirza","Ali","Adrian","Alif","Fadhilah","Mifat","Miftah","Haris","Sidqih","Putri"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Algoritma dan Pemrograman","Aljabar Linear","Data Mining","Technopreneur","Blockchain","Cloud Computing","Struktur Data","Teori Bahasa dan Automata","Rekayasa Perangkat Lunak","Embedded"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');

