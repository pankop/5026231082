@extends('layouts.template')

@section('content')
    <h2>Tambah Data Karyawan Baru</h2>

    <form action="/karyawan/store" method="POST">
        @csrf

        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required maxlength="5">
            </div>
        </div>

        <div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" required maxlength="50">
            </div>
        </div>

        <div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="divisi" name="divisi" required maxlength="5">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="departemen" name="departemen" required maxlength="10">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <a href="/karyawan" class="btn btn-secondary">BATAL</a>
            </div>
        </div>
    </form>

@endsection
