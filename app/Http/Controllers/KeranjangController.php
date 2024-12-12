<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeranjangController extends Controller
{
    // Menampilkan data keranjang
    public function keranjang()
    {
        // Mendapatkan data keranjang dari session
        $keranjang = session()->get('keranjang', []);

        // Mengirim data keranjang ke tampilan
        return view('keranjang', compact('keranjang'));
    }

    public function checkout()
{
    $keranjang = session()->get('keranjang', []);
    $total = 0;

    // Calculate the total price
    foreach ($keranjang as $item) {
        $total += $item['harga'] * $item['jumlah'];
    }

    // Pass the total to the view
    return view('checkout', ['checkout' => $keranjang, 'total' => $total]);
}


    // Menambahkan item ke keranjang
    public function tambah(Request $request)
    {
        // Ambil keranjang dari session (atau buat array baru jika kosong)
        $keranjang = session()->get('keranjang', []);

        // Tambahkan item baru ke keranjang
        $keranjang[] = [
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'jumlah' => $request->input('jumlah'),
        ];

        // Simpan kembali ke session
        session()->put('keranjang', $keranjang);

        // Redirect ke halaman keranjang dengan pesan sukses
        return redirect()->route('keranjang')->with('success', 'Item berhasil ditambahkan ke keranjang!');
    }
    // Menghapus item dari keranjang
    public function hapus($id)
{
    // Ambil keranjang dari session
    $keranjang = session()->get('keranjang', []);

    // Cek apakah ID valid dan ada dalam keranjang
    if (isset($keranjang[$id])) {
        // Hapus item berdasarkan id
        unset($keranjang[$id]);

        // Simpan kembali ke session
        session()->put('keranjang', array_values($keranjang));

        return redirect()->route('keranjang')->with('success', 'Item berhasil dihapus!');
    } else {
        return redirect()->route('keranjang')->with('error', 'Item tidak ditemukan!');
    }
}

    // Mengedit item keranjang
    public function edit($id)
    {
        $keranjang = session()->get('keranjang', []);
        
        // Pastikan item dengan ID yang dimaksud ada
        if (!isset($keranjang[$id])) {
            return redirect()->route('keranjang')->with('error', 'Item tidak ditemukan.');
        }
    
        $item = $keranjang[$id]; // Ambil data item berdasarkan ID
        return view('cart.edit', compact('item', 'id')); // Kirim ke view
    }
    
    // Update item keranjang
    public function update(Request $request, $id)
    {
        $keranjang = session()->get('keranjang', []);

        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Update item
        $keranjang[$id] = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        session()->put('keranjang', $keranjang);

        return redirect()->route('keranjang')->with('success', 'Item berhasil diperbarui!');
    }

    public function add(Request $request)
    {
        // Your logic to add the item to the cart

        // Example: Add the item to the session cart
        $item = $request->only(['name', 'price', 'quantity']);
        $cart = session()->get('cart', []);
        $cart[] = $item; // Add the new item to the cart
        session()->put('cart', $cart); // Save it back to the session

        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }

    public function index()
{
    // Ambil keranjang dari session
    $keranjang = session()->get('keranjang', []);

    // Tampilkan view dengan data keranjang
    return view('keranjang', ['keranjang' => $keranjang]);
}
}
