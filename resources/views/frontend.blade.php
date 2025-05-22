<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Link per Pertemuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-center mb-4">Daftar Link</h1>

@php
    $pertemuan = [
        [
            'tugas' => [
                ['judul' => 'pertama', 'url' => 'satu'],
                ['judul' => 'pertemuan 3', 'url' => 'boostrap1'],
            ],
        ],
        [
            'tugas' => [
                ['judul' => 'Pertemuan 4', 'url' => 'pertemuan4']
            ],
        ],
        [

            'tugas' => [
                ['judul' => 'Tugas Linktree', 'url' => 'linktree']
            ],
        ],
        [

            'tugas' => [
                ['judul' => 'Pertemuan 7 - js1', 'url' => 'js1'],
                ['judul' => 'Pertemuan 7 - validasi1', 'url' => 'validasi1']
            ],
        ],
        [

            'tugas' => [
                ['judul' => 'ETS', 'url' => 'ets']
            ],
        ],
    ];
@endphp

@foreach ($pertemuan as $p)
    <div class="card mb-4">
        <ul class="list-group list-group-flush">
            @foreach ($p['tugas'] as $tugas)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $tugas['judul'] }}
                    <a href="{{ $tugas['url'] }}" class="btn btn-sm btn-outline-primary" target="_blank">Lihat</a>
                </li>
            @endforeach
        </ul>
    </div>
    @endforeach

    </div>

    </body>
    </html>
