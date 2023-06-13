<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminBorrow extends Model
{
    use HasFactory;

    protected $table = 'borrow';

    protected $fillable = [
        'magazine_id', 'users_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status_pinjaman',
        'denda',
        'cek'
    ];

    public function users() {
        return $this->belongsTo(User::class,'users_id');
    }

    public function books() {
        return $this->belongsTo(Book::class,'magazine_id');
    }
}
