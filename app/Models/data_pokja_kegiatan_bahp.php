<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pokja_kegiatan_bahp extends Model
{
    use HasFactory;

    protected $table = 'data_pokja_kegiatan_bahp';
    protected $primaryKey = 'bahp_id';

    protected $fillable = [
        'bahp_time',
        'bahp_nomor',
        'bahp_tanggal',
        'bahp_id_keg',
        'bahp_dok',
        'bap_admin',
        'upload_set_disposisi',
    ];
}
