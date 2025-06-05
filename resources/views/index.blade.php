@extends('template')

@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-info"> + Tambah Pegawai Baru</a>

{{--    form inline ini biar dia dipaksa sebaris--}}
    <form action="/pegawai/cari" method="GET" class="form-inline">
        <label class="form-label pr-2">Cari Data Pegawai :</label>
        <input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control m-1">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success">Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }} {{--hanya bisa dipakai dengan paginate, saat get harus dihapus--}}
@endsection



