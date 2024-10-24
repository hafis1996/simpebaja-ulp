<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pokja_kegiatan extends Model
{
    use HasFactory;

    protected $table = 'data_pokja_kegiatan';
    protected $primaryKey = 'keg_pokja_id';

    protected $fillable = [
        'keg_pokja_time',
        'pokja_id',
        'pokja_sk',
        'keg_pokja_tanggal',
        'keg_pokja_keg',
        'keg_bahp',
        'keg_date_bahp',
        'keg_dok_pra',
        'keg_date_dok_pra',
        'keg_surat_ppenyedia',
        'keg_time_spl',
        'bahp_approved',
        'bahp_time',
        'keg_set_admin',
    ];
}
