<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('About',data: ['nama' => 'Muhammad Rizky     Fajar']);
});

Route::get('/form', function () {
    return view('form');
})->name('form.tampil');

Route::post('/proses-form', function (Request $request) {
    // Validasi input
    $data = $request->validate([
        'nama' => 'required',
        'nim' => 'required',
        'email' => 'required|email',
        'hp' => 'required',
    ]);
    $request->session()->push('data_mahasiswa', $data);
    return redirect('/tabel');
})->name('form.proses');

Route::get('/tabel', function () {
    $semua_data = session('data_mahasiswa', []);
    return view('tabel', compact('semua_data'));
})->name('tabel.tampil');

Route::get('/hapus-data', function () {
    session()->forget('data_mahasiswa'); 
    return redirect()->route('tabel.tampil')->with('pesan', 'Data berhasil dihapus!');
})->name('hapus.data');