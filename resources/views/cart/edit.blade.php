<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item Keranjang</title>
</head>
<body>
    <h1>Edit Item</h1>

    <form action="{{ route('keranjang.update', $id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nama">Nama Item</label>
        <input type="text" name="nama" value="{{ old('nama', $item['nama']) }}" required>
        
        <label for="harga">Harga</label>
        <input type="number" name="harga" value="{{ old('harga', $item['harga']) }}" required>
        
        <label for="jumlah">Jumlah</label>
        <input type="number" name="jumlah" value="{{ old('jumlah', $item['jumlah']) }}" required>

        <button type="submit">Update Item</button>
    </form>

    <a href="{{ route('keranjang') }}">Kembali ke Keranjang</a>
</body>
</html>
