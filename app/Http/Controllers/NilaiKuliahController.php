<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    //
      public function index()
    {
    	// mengambil data dari table
    	$nilai = DB::table('nilaikuliah')->get(); //jika tidak pake paginate

    	// mengirim data  ke view index
    	return view('nilaikuliah/index',['nilai' => $nilai]);

    }

    // method untuk menampilkan view form tambah
	public function tambah()
	{

		// memanggil view tambah
		return view('nilaikuliah/tambah');

	}

	// method untuk insert data ke table
	public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks
        ]);

        return redirect('/nilaikuliah');
    }

}


