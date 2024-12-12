@extends('main')

@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="number"],
        input[type="file"],
        select,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #66afe9;
            outline: none;
        }
        button {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            cursor: pointer;
            font-size: 18px;
        }
        button:hover {
            background-color: #218838;
        }
        button:active {
            background-color: #1e7e34;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .error {
            color: red;
        }
    </style>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="nama_item">Nama Item</label>
        <input type="text" id="nama_item" name="nama_item" placeholder="Masukkan nama produk" required>

        <label for="harga">Harga</label>
        <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk" min="0" step="1000" required>

        <label for="kategori">Kategori</label>
        <input type="text" id="kategori" name="kategori" placeholder="Masukkan kategori produk" required>

        <label for="status">Status</label>
        <select id="status" name="status" required>
            <option value="tersedia">Tersedia</option>
            <option value="habis">Habis</option>
        </select>

        <label for="foto">Foto (Opsional)</label>
        <input type="file" id="foto" name="foto" accept="image/*">

        <button type="submit">Tambah</button>
    </form>

@endsection
