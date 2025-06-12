<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'karyawan' dengan paginasi 10 item per halaman
        $karyawan = DB::table('karyawan')->paginate(10);

        // Mengirim data karyawan ke view 'karyawan.index'
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }
    public function tambah()
    {
        // Memanggil view 'karyawan.tambah'
        return view('karyawan.tambah');
    }

    public function store(Request $request)
    {
        // Insert data ke tabel 'karyawan'
        DB::table('karyawan')
            ->insert([
                'kodepegawai' => $request->kodepegawai, // Sesuaikan dengan nama field di DB
                'namalengkap' => $request->namalengkap, // Sesuaikan dengan nama field di DB
                'divisi' => $request->divisi,           // Sesuaikan dengan nama field di DB
                'departemen' => $request->departemen    // Sesuaikan dengan nama field di DB
            ]);

        // Alihkan halaman kembali ke daftar karyawan
        return redirect('/karyawan');
    }
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari tabel 'karyawan' sesuai pencarian 'namalengkap'
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();

        // Mengirim data karyawan ke view 'karyawan.index'
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    public function hapus($id)
    {
        // Menghapus data karyawan berdasarkan kodepegawai yang dipilih
        DB::table('karyawan')
            ->where('kodepegawai', $id) // Menggunakan 'kodepegawai' sebagai Primary Key
            ->delete();

        // Alihkan halaman kembali ke daftar karyawan
        return redirect('/karyawan');
    }

    /*
    public function update(Request $request)
    {
        // Memperbarui data karyawan
        DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->update([ // Menggunakan 'kodepegawai'
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // Alihkan halaman kembali ke daftar karyawan
        return redirect('/karyawan');
    }
    */

    /**
     * Menampilkan form untuk mengedit data karyawan.
     * Fungsi ini dikomentari karena tidak digunakan.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    /*
    public function edit($id)
    {
        // Mengambil data karyawan berdasarkan kodepegawai yang dipilih
        $karyawan = DB::table('karyawan')
            ->where('kodepegawai', $id) // Menggunakan 'kodepegawai' sebagai Primary Key
            ->get();

        // Mengirim data karyawan yang didapat ke view 'karyawan.edit'
        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }
    */
}
