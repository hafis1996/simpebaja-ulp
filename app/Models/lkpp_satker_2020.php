<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkpp_satker_2020 extends Model
{
    use HasFactory;

    protected $table = 'lkpp_satker_2020';
    protected $primaryKey = 'satker_id';

    protected $fillable = [
        'id',
        'id_kldi',
        'id_satker',
        'nama',
        'tahun_aktif',
    ];
}
