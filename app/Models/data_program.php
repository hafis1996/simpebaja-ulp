<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_program extends Model
{
    use HasFactory;

    protected $table = 'data_program';
    protected $primaryKey = 'program_id';

    protected $fillable = [
        'id_program_lkpp',
        'program_skpd',
        'program_kode_rekening',
        'program_nama',
    ];
}
