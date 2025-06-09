@extends('layouts.template')

@section('content')
    <h3>Data Roti</h3>

    <a href="/roti/tambah" class="btn btn-info"> + Tambah Roti Baru</a>

    <form action="/roti/cari" method="GET" class="form-inline">
        <label class="form-label pr-2">Cari Data Roti :</label>
        <input type="text" name="cari" placeholder="Cari Roti berdasarkan Merk.." class="form-control m-1">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br/>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Merk Roti</th>
            <th>Harga Roti</th>
            <th>Tersedia</th>
            <th>Berat (gram)</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($roti as $r)
            <tr>
                <td>{{ $r->merkroti }}</td>
                <td>Rp {{ number_format($r->hargaroti, 0, ',', '.') }}</td>
                <td>{{ $r->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $r->berat }}</td>
                <td>
                    <a href="/roti/edit/{{ $r->ID }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="/roti/hapus/{{ $r->ID }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $roti->links() }}
@endsection
