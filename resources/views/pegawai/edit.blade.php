@extends('layouts.template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br/>
    <br/>

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Nama</label>
                </div>
                <div class="col-6">
                    <input type="text" name="nama" required="required" class="form-control">
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Jabatan</label>
                </div>
                <div class="col-6">
                    <input type="text" name="jabatan" required="required" class="form-control">
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Umur</label>
                </div>
                <div class="col-6">
                    <input type="text" name="umur" required="required" class="form-control">
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Alamat</label>
                </div>
                <div class="col-6">
                    <textarea name="alamat" required="required" class="form-control"></textarea> <br/>
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach

@endsection
