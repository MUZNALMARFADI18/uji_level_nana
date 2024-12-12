<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #444;
        }
        .success-message {
            color: green;
            font-size: 1.1em;
            margin-bottom: 15px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }
        table th {
            background-color: #f4f4f4;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .empty-message {
            text-align: center;
            font-size: 1.2em;
            color: #999;
            padding: 20px 0;
        }
        .checkout-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px 15px;
            text-align: center;
            background-color: #e74c3c;
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .checkout-btn:hover {
            background-color: #c0392b;
        }
        .add-item-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px 15px;
            text-align: center;
            background-color: #2ecc71;
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .add-item-btn:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <h1>Keranjang Belanja</h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    @if(count($keranjang) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Aksi</th> <!-- Menambahkan kolom untuk tombol aksi -->
                </tr>
            </thead>
            <tbody>
            @foreach ($keranjang as $key => $item)
    <tr>
        <td>{{ $item['nama'] ?? 'Tidak ada nama' }}</td>
        <td>IDR {{ number_format($item['harga'] ?? 0, 0, ',', '.') }}</td>
        <td>{{ $item['jumlah'] ?? 0 }}</td>
        <td>IDR {{ number_format(($item['harga'] ?? 0) * ($item['jumlah'] ?? 0), 0, ',', '.') }}</td>
        <td>
            <a href="{{ route('keranjang.edit', $key) }}">Edit</a> |
            <form action="{{ route('keranjang.hapus', $key) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
    @else
        <p class="empty-message">Keranjang Anda kosong. Tambahkan item untuk membeli makanan dan minuman!</p>
    @endif

    <!-- Tombol Tambahkan Item Baru -->
    <a href="{{ route('cart.add') }}" class="add-item-btn">Tambah Item</a>

    <!-- Tombol Checkout -->
    <a href="{{ route('checkout') }}" class="checkout-btn">Checkout</a>
</body>
</html>
