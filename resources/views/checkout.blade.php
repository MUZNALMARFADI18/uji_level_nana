<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
    </style>
</head>
<body>
    <h1>Checkout</h1>

    <p>Terima kasih telah berbelanja. Berikut adalah detail pesanan Anda:</p>
    @if (count($checkout) > 0)
    <table>
        <thead>
            <tr>
                <th>Nama Item</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($checkout as $item)
                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>IDR {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>{{ $item['jumlah'] }}</td>
                    <td>IDR {{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Total amount -->
    <div style="text-align: right; font-size: 1.2em; margin-top: 20px;">
        <strong>Total Keseluruhan: IDR {{ number_format($total, 0, ',', '.') }}</strong>
    </div>
@else
    <p>Keranjang Anda kosong.</p>
@endif

<a href="{{ route('home') }}" class="checkout-btn">Konfirmasi Pembayaran</a>

</body>
</html>
