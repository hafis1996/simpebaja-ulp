<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skpd_kategori extends Model
{
    use HasFactory;

    protected $table = 'skpd_kategori';
    protected $primaryKey = 'skpd_kat_id';

    protected $fillable = [
        'skpd_kat_name',
        'skpd_kat_pimpinan',
    ];
}
