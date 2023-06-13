<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'tanggal_buat',
        'deskripsi',
        'slug',
        'deskripsi_singkat',
        'nama',
        'gambar',
        'file_buku'
    ];

    
}
