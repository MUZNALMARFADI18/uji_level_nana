<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    // Mendapatkan semua post
    $posts = Post::all();

    // Mengirimkan data dengan key 'posts' untuk konsistensi
    return view('post.index', ['post' => $posts]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
return view('post.create');
}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|unique:posts|max:150',
            'body' => 'required',
        ]);

        // Ambil semua input dan simpan data baru
        $input = $request->all();

        Post::create($input);

        return back()->with('success', 'Post baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Belum diimplementasikan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        // Temukan post yang akan diedit
        $post = Post::findOrFail($post);

        return view('post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|max:150|unique:posts,title,',
            'body' => 'required',
        ]);

        // Update post
        $post = Post::find($post)->update($request->all());

        return back() ->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $postId): RedirectResponse
    {
        // Cari post yang akan dihapus
        $post = Post::findOrFail($postId);

        // Hapus post
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Penghapusan berhasil.');
    }
}
