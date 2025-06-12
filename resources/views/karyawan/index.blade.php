@extends('layouts.template')

@section('content')
    <h2>Data Karyawan</h2>

    <div class="row mb-3">
        <div class="col-sm-6">
            <form action="/karyawan/cari" method="GET" class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Nama Karyawan" aria-label="Search" name="cari" value="{{ old('cari') }}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </div>
    </div>


    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    {{-- Tombol Hapus Data --}}
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data karyawan ini?');">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/karyawan/tambah" class="btn btn-info mb-3"> + Tambah Karyawan Baru</a>

    <div class="d-flex justify-content-center">
        {{ $karyawan->links() }}
    </div>

@endsection
