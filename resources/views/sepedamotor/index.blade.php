@extends('template')

@section('title', 'Data Sepeda Motor')
<!-- konten  -->

@section('konten')

    <center>

        <br />
        <br />
        <p>Cari Sepeda Motor :</p>
        <form action="/sepedamotorcari" method="GET">
            <input type="text" name="cari" placeholder="Cari Sepeda Motor .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-stripped table-hover">
            <tr>
                <th>Kode Sepeda Motor</th>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach ($sepedamotor as $p)
                <tr>
                    <td>{{ $p->kodesepedamotor }}</td>
                    <td>{{ $p->merksepedamotor }}</td>
                    <td>{{ $p->stocksepedamotor }}</td>
                    <td>{{ $p->tersedia }}</td>
                    <td>
                        <a href="/sepedamotoredit/{{ $p->kodesepedamotor }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/sepedamotorhapus/{{ $p->kodesepedamotor }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination" style="margin:20px 0">
            {{ $sepedamotor->links() }}
        </ul>

        <a href="/sepedamotortambah" class="btn btn-primary"> + Tambah Sepeda Motor Baru</a>

    </center>


@endsection
