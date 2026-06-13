@extends('template')

@section('title', 'Tambah Belanja')
    <!-- konten  -->

@section('konten')
    <center>

        <br />
        <br />

           <div class="card">
        <div class="card-header">
            Form Tambah Data Belanja
        </div>

        <div class="card-body">
            <form action="/belanjastore" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="number" name="kode" id="kode" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga" id="harga" class="form-control" required>
                    </div>
                </div>


                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Beli" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
        <br />
        <br />

        <a href="/belanja" class="btn btn-info"> Kembali</a>

    </center>

@endsection
