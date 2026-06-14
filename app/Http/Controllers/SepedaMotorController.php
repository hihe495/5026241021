<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaMotorController extends Controller
{
    //
     public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //jika tidak pake paginate
        $sepedamotor = DB::table('sepedamotor')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('sepedamotor/index',['sepedamotor' => $sepedamotor]);

    }

//func cari
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepedamotor = DB::table('sepedamotor')
        ->where('merksepedamotor','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('sepedamotor/index',['sepedamotor' => $sepedamotor]);

	}

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('sepedamotor/tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sepedamotor')->insert([
			'merksepedamotor' => $request->merk,
			'stocksepedamotor' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('sepedamotor/edit',['sepedamotor' => $sepedamotor]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('sepedamotor')->where('kodesepedamotor',$request->kodesepedamotor)->update([
			'merksepedamotor' => $request->merk,
			'stocksepedamotor' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepedamotor')->where('kodesepedamotor',$kodesepedamotor)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');
	}
}
