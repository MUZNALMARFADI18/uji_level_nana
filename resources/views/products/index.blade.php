<!-- resources/views/products/index.blade.php -->
@extends('main')

@section('content')
    <h1>Daftar Produk</h1>

    @if($products->isNotEmpty())
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->nama_item }}</td>
                        <td>IDR {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td>{{ $product->kategori }}</td>
                        <td>{{ $product->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada produk.</p>
    @endif
@endsection
