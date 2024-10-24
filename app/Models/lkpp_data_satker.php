<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkpp_data_satker extends Model
{
    use HasFactory;

    protected $table = 'lkpp_data_satker';
    protected $primaryKey = 'id_data_set';

    protected $fillable = [
        'id_dinas',
        'id_satker',
        'nama_dinas',
        'tahun_aktif',
        'status_aktif',
    ];
}
