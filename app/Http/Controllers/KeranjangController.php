<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjangbelanja;

class KeranjangController extends Controller
{
    public function index()
    {
        $data = Keranjangbelanja::all();
        return view('keranjang.index', compact('data'));
    }

    public function create()
    {
        return view('keranjang.tambah');
    }

    public function store(Request $request)
    {
        Keranjangbelanja::create([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);
        return redirect('/keranjang');
    }

    public function destroy($id)
    {
        Keranjangbelanja::findOrFail($id)->delete();
        return redirect('/keranjang');
    }
}
