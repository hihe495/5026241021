<!DOCTYPE html>
<html>
<head>
    <title>Form Beli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Form Beli Barang</h2>
    <form action="/keranjang/store" method="POST">
        @csrf
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="KodeBarang" class="form-control" style="width:300px" required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="Jumlah" class="form-control" style="width:300px" required>
        </div>
        <div class="form-group">
            <label>Harga per Item</label>
            <input type="text" name="Harga" class="form-control" style="width:300px" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/keranjang" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
