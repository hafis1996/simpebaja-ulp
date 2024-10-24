<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkpp_data_kegiatan_sub extends Model
{
    use HasFactory;

    protected $table = 'lkpp_data_kegiatan_sub';
    protected $primaryKey = 'sub_id';

    protected $fillable = [
        'data_id',
        'program_id',
        'kegiatan_id',
        'kode_objek',
        'uraian_objek',
        'pagu_objek',
    ];
}
