<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkpp_data_kegiatan extends Model
{
    use HasFactory;

    protected $table = 'lkpp_data_kegiatan';
    protected $primaryKey = 'id_data_k';

    protected $fillable = [
        'id_data_lkpp',
        'id_satket',
        'id_kegiatan',
        'id_program',
        'nama_kegiatan',
        'pagu_kegiatan',
        'tahun_anggaran',
        'status_lkpp_keg',
    ];
}
