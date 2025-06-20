<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RotiController extends Controller
{
    /**
     * Menampilkan daftar roti dengan paginasi.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Mengambil data dari tabel 'roti' dengan paginasi 10 item per halaman
        $roti = DB::table('roti')->paginate(10);

        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti'  // Sesuaikan dengan nama field di DB
            ]);
        // Mengirim data roti ke view 'roti.index'
        return view('roti.index', ['roti' => $roti]);
    }

    /**
     * Menampilkan form untuk menambah roti baru.
     *
     * @return \Illuminate\View\View
     */
    public function tambah()
    {
        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti/tambah'  // Sesuaikan dengan nama field di DB
            ]);
        // Memanggil view 'roti.tambah'
        return view('roti.tambah');
    }

    /**
     * Menyimpan data roti baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Insert data ke tabel 'roti'
        DB::table('roti')
            ->insert([
                'merkroti' => $request->merkroti,
                'hargaroti' => $request->hargaroti,
                'tersedia' => $request->tersedia, // Pastikan ini adalah boolean (e.g., dari checkbox)
                'berat' => $request->berat
            ]);

        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti/store'  // Sesuaikan dengan nama field di DB
            ]);

        // Alihkan halaman kembali ke daftar roti
        return redirect('/roti');
    }

    /**
     * Menampilkan form untuk mengedit data roti.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Mengambil data roti berdasarkan ID yang dipilih
        $roti = DB::table('roti')
            ->where('ID', $id) // Menggunakan 'ID' karena itu nama Primary Key Anda
            ->get();

        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti/edit/'  // Sesuaikan dengan nama field di DB
            ]);

        // Mengirim data roti yang didapat ke view 'roti.edit'
        return view('roti.edit', ['roti' => $roti]);
    }

    /**
     * Mencari roti berdasarkan merk roti.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari tabel 'roti' sesuai pencarian 'merkroti'
        $roti = DB::table('roti')
            ->where('merkroti', 'like', "%" . $cari . "%")
            ->paginate();

        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti/cari'  // Sesuaikan dengan nama field di DB
            ]);

        // Mengirim data roti ke view 'roti.index'
        return view('roti.index', ['roti' => $roti]);
    }

    /**
     * Memperbarui data roti di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        // Memperbarui data roti
        DB::table('roti')->where('ID', $request->ID)->update([ // Menggunakan 'ID'
            'merkroti' => $request->merkroti,
            'hargaroti' => $request->hargaroti,
            'tersedia' => $request->tersedia, // Pastikan ini adalah boolean
            'berat' => $request->berat
        ]);

        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti/update'  // Sesuaikan dengan nama field di DB
            ]);

        // Alihkan halaman kembali ke daftar roti
        return redirect('/roti');
    }

    /**
     * Menghapus data roti dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function hapus($id)
    {
        // Menghapus data roti berdasarkan ID yang dipilih
        DB::table('roti')
            ->where('ID', $id) // Menggunakan 'ID'
            ->delete();

        DB::table('logactivity')
            ->insert([
                'namaroute' => '/roti/hapus/'  // Sesuaikan dengan nama field di DB
            ]);
        // Alihkan halaman kembali ke daftar roti
        return redirect('/roti');
    }
}
