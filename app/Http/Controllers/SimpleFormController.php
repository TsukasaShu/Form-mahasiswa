<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Perhatikan baris ini: kita 'extends Controller' yang tadi kita perbaiki di Langkah 1
class SimpleFormController extends Controller
{
    public function tampilkanForm() {
        return view('halaman-form');
    }

    public function prosesForm(Request $request) {
        $data = $request->validate([
            'nama'  => 'required',
            'nim'   => 'required|numeric',
            'email' => 'required|email',
            'hp'    => 'required|numeric',
        ]);

        $request->session()->push('data_mahasiswa', $data);
        return redirect()->route('tabel')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function tampilkanTabel() {
        $semua_data = session('data_mahasiswa', []);
        return view('halaman-tabel', compact('semua_data'));
    }

    public function hapusSemuaData() {
        session()->forget('data_mahasiswa');
        return redirect()->route('tabel')->with('pesan', 'Semua data telah dihapus.');
    }
}