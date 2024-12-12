<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Http\Requests\PostRequest; // Jangan lupa import PostRequest jika digunakan

class HalamanController extends Controller 
{     
    public function home()     
    {         
        return view('home');     
    }      

    public function about()     
    {         
        return view('about');     
    }      

    public function menu()     
    {         
        return view('menu');     
    }      

    public function contactForm() // Ganti nama method ini untuk menghindari duplikasi nama
    {         
        return view('contact');     
    }      
    public function contact()
    {
        return view('contact');  // Ganti 'contact' dengan nama view yang sesuai
    }
    public function keranjang()
{
    $keranjang = session()->get('keranjang', []);
    return view('keranjang', compact('keranjang'));
}

public function checkout()
    {
        // Logika untuk checkout, bisa proses pembayaran atau checkout
        $keranjang = Keranjang::where('user_id', auth()->id())->get();
        
        // Lakukan proses checkout, misalnya mengosongkan keranjang
        Keranjang::where('user_id', auth()->id())->delete();

        return view('checkout', compact('keranjang'));
    }

}