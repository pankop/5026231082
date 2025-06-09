@extends('layouts.template')

@section('content')
    <h3>Edit Data Roti</h3>

    <a href="/roti" class="btn btn-secondary btn-sm mb-3"> Kembali</a>

    @foreach ($roti as $r)
        <form action="/roti/update" method="post">
            {{ csrf_field() }}

            {{-- Hidden input for the roti ID --}}
            <input type="hidden" name="ID" value="{{ $r->ID }}">

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="merkroti" class="control-label">Merk Roti</label>
                </div>
                <div class="col-6">
                    <input type="text" id="merkroti" name="merkroti" required="required" class="form-control" value="{{ $r->merkroti }}">
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="hargaroti" class="control-label">Harga Roti</label>
                </div>
                <div class="col-6">
                    <input type="number" id="hargaroti" name="hargaroti" required="required" class="form-control" value="{{ $r->hargaroti }}">
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="tersedia" class="control-label">Tersedia</label>
                </div>
                <div class="col-6">
                    {{-- Checkbox for boolean 'tersedia' field --}}
                    <select id="tersedia" name="tersedia" class="form-control">
                        <option value="1" {{ $r->tersedia ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$r->tersedia ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label for="berat" class="control-label">Berat (gram)</label>
                </div>
                <div class="col-6">
                    <input type="number" step="0.01" id="berat" name="berat" required="required" class="form-control" value="{{ $r->berat }}">
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach

@endsection
