<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SyaratDokumen extends Model
{
    use HasFactory;

   protected $table = 'syarat_dokumen';
    protected $primaryKey = 'syarat_id';
   

    protected $fillable = [
       
        'jenis_pengadaan',
        'nama_dokumen',
        'keterangan',
    ];
}
