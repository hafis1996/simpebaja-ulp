<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitoring extends Model
{
    use HasFactory;

    protected $table = 'monitoring';
    protected $primaryKey = 'monitoring_id';

    protected $fillable = [
        'skpd_id',
        'skpd_nama',
        'tahun_anggaran',
        'jumlah_pengajuan',
        'jumlah_verifikasi',
        'jumlah_evaluasi',
        'jumlah_e_lelang',
        'jumlah_hps',
    ];
}
