    @extends('layout')
    @section('judul', 'Form Mahasiswa')
    @section('konten')
    <div class="container mt-5">
        <div class="card shadow col-md-6 mx-auto">
            <div class="card-header bg-dark text-white">
                <h4>Form Input Data Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form action="/proses-form" method="POST">
                    @csrf <div class="mb-3">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>No HP</label>
                        <input type="number" name="hp" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Simpan Data</button>
                    <a href="/tabel" class="btn btn-secondary w-100 mt-2">Lihat Tabel</a>
                </form>
            </div>
        </div>
    </div>
    @endsection
