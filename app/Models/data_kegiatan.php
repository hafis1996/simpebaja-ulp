<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_kegiatan extends Model
{
    use HasFactory;

    protected $table = 'data_kegiatan';
    protected $primaryKey = 'kegiatan_id';

    protected $fillable = [
        'skpd_id',
        'program_id',
        'lkpp_id_satker',
        'lkpp_id_kegiatan',
        'lkpp_id_program',
        'lkpp_anggaran',
        'lkpp_ta',
        'kegiatan_kode_rekening',
        'kegiatan_nama',
        'kegiatan_status',
    ];
}
