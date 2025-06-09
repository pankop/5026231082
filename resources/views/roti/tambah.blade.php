@extends('layouts.template')

@section('content')
    <h3>Tambah Data Roti Baru</h3>

    <a href="/roti" class="btn btn-secondary btn-sm mb-3"> Kembali</a>

    {{-- action mengarah ke /roti/store untuk dilakukan routing --}}
    <form action="/roti/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label for="merkroti" class="control-label">Merk Roti</label>
            </div>
            <div class="col-6">
                <input type="text" id="merkroti" name="merkroti" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label for="hargaroti" class="control-label">Harga Roti</label>
            </div>
            <div class="col-6">
                <input type="number" id="hargaroti" name="hargaroti" required="required" class="form-control">
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label for="tersedia" class="control-label">Tersedia</label>
            </div>
            <div class="col-6">
                {{-- Menggunakan checkbox untuk input boolean 'tersedia' --}}
                <input type="checkbox" id="tersedia" name="tersedia" value="1" checked> Ya, Tersedia
            </div>
        </div>
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label for="berat" class="control-label">Berat (gram)</label>
            </div>
            <div class="col-6">
                <input type="number" step="0.01" id="berat" name="berat" required="required" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
