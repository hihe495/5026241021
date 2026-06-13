<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    //
      public function index()
    {
    	// mengambil data dari table
    	$belanja = DB::table('keranjangbelanja')->get(); //jika tidak pake paginate

    	// mengirim data  ke view index
    	return view('keranjang/index',['belanja' => $belanja]);

    }

    // method untuk menampilkan view form tambah
	public function tambah()
	{

		// memanggil view tambah
		return view('keranjang/tambah');

	}

	// method untuk insert data ke table
	public function store(Request $request)
	{
		// insert data ke table
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga,
		]);
		// alihkan halaman ke halaman
		return redirect('/belanja');

	}

	// method untuk hapus data
	public function hapus($id)
	{
		// menghapus data  berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();

		// alihkan halaman ke halaman
		return redirect('/belanja');
	}
}
