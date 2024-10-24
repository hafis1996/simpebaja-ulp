<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkpp_data_program extends Model
{
    use HasFactory;

    protected $table = 'lkpp_data_program';
    protected $primaryKey = 'id_data_p';

    protected $fillable = [
        'id_data_p_lkpp',
        'id_program',
        'tahun_program',
        'id_satker',
        'nama_program',
        'pagu_program',
        'status_lkpp',
    ];
}
