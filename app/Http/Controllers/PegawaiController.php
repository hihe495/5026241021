<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index1()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('index1', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        DB::table('pegawai')->insert([
            'pegawai_nama'    => $request->input('pegawai_nama'),
            'pegawai_jabatan' => $request->input('pegawaia_jabatan'),
            'pegawai_umur'    => $request->input('pegawai_umur'),
            'pegawai_alamat'  => $request->input('pegawai_alamat'),
        ]);

        return redirect('/pegawai');
    }
}
