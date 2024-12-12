<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .message {
            text-align: center;
            font-weight: bold;
            color: green;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #fafafa;
        }
        .btn-delete {
            background-color: #e74c3c;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-delete:hover {
            background-color: #c0392b;
        }
        .btn-add {
            display: inline-block;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-add:hover {
            background-color: #2980b9;
        }
        .btn-add:active {
            background-color: #1f5e92;
        }
        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Keranjang Belanja</h1>

    @if(session('success'))
        <p class="message">{{ session('success') }}</p>
    @endif

    @if(count($keranjang) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keranjang as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>IDR {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>IDR {{ number_format($item->harga * $item->jumlah, 0, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn-delete" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Keranjang Anda kosong. Tambahkan item!</p>
    @endif

    <div style="text-align: center; margin-top: 20px;">
        <a class="btn-add" href="{{ route('cart.add') }}">Tambah Item</a>
    </div>

</body>
</html>
