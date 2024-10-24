<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita_konten extends Model
{
    use HasFactory;

    protected $table = 'berita_konten';
    protected $primaryKey = 'berita_id';

    protected $fillable = [
        'berita_kat_id',
        'berita_post',
        'berita_admin',
        'berita_judul',
        'berita_permalink',
        'berita_isi',
        'berita_gambar',
        'berita_baca',
        'berita_status',
    ];
}
