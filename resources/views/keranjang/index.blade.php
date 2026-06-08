<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Keranjang Belanja</h2>
    <a href="/keranjang/tambah" class="btn btn-primary mb-3">+ Beli</a>

    <table class="table table-bordered table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjang/hapus/{{ $item->id }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin batalkan?')">Batal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
