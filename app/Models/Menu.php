<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Menentukan kolom yang bisa diisi
    protected $fillable = [
        'nama', 'harga', // Gunakan nama kolom yang sesuai dengan tabel
    ];

    // Menentukan nama tabel yang sesuai
    protected $table = 'menu'; // Pastikan nama tabel sesuai dengan yang ada di database
}
