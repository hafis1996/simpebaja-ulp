<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita_kategori extends Model
{
    use HasFactory;

    protected $table = 'berita_kategori';
    protected $primaryKey = 'berita_kat_id';

    protected $fillable = [
        'berita_kat_nama',
    ];
}
