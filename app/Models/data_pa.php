<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pa extends Model
{
    use HasFactory;

    protected $table = 'data_pa';
    protected $primaryKey = 'pa_id';

    protected $fillable = [
        'data_id',
        'pa_instansi',
        'pa_jabatan',
        'pa_nama_pa',
        'pa_nip',
    ];
}
