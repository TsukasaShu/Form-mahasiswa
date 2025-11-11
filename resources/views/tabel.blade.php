    @extends('layout')
    @section('judul', 'Tabel Data')
    @section('konten')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white d-flex justify-content-between">
                <h4>Data Mahasiswa</h4>
                <div>
                    <a href="/form" class="btn btn-primary btn-sm">Tambah Data Baru</a>
                    <a href="/hapus-data" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus semua?')">Hapus Data</a>
                </div>
            </div>
            <div class="card-body">
                @if(session('pesan'))
                    <div class="alert alert-success">{{ session('pesan') }}</div>
                @endif

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Email</th>
                            <th>No HP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($semua_data as $index => $mhs)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mhs['nama'] }}</td>
                                <td>{{ $mhs['nim'] }}</td>
                                <td>{{ $mhs['email'] }}</td>
                                <td>{{ $mhs['hp'] }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-danger">Belum ada data tersimpan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
