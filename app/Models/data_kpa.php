<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_kpa extends Model
{
    use HasFactory;

    protected $table = 'data_kpa';
    protected $primaryKey = 'kpa_id';

    protected $fillable = [
        'data_id',
        'kpa_tempat',
        'kpa_waktu',
        'kpa_instansi',
        'kpa_jabatan',
        'kpa_nama_kpa',
        'kpa_nip',
    ];
}
