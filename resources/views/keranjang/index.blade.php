@extends('template')

@section('title', 'Data Keranjang')
<!-- konten  -->

@section('konten')

    <center>

        <br />
        <br />
        <p>Data Belanja :</p>
        <br />

        <table class="table table-stripped table-hover">
            <tr>
                <th>Kode Belanja</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($belanja as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->KodeBarang }}</td>
                    <td>{{ $p->Jumlah }}</td>
                    <td>{{ $p->Harga }}</td>
                    <td>{{ $p->Harga*$p->Jumlah }}</td>
                    <td>
                        <a href="/belanjatambah" class="btn btn-warning">Beli</a>
                        |
                        <a href="/belanjahapus/{{ $p->id }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </center>


@endsection
