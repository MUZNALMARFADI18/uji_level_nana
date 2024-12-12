<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $keranjang = Cart::all();  // Ambil semua data keranjang
        return view('cart.index', compact('keranjang'));  // Tampilkan ke view
    }

    public function add()
    {
        return view('cart.add');  // Tampilkan form untuk menambah item
    }

    public function store(Request $request)
    {
        // Validasi data yang dimasukkan
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Simpan data item ke database
        Cart::create($request->all());

        return redirect()->route('cart.add')->with('success', 'Item berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $item = Cart::findOrFail($id);  // Temukan item berdasarkan ID
        $item->delete();  // Hapus item

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus!');
    }
}
