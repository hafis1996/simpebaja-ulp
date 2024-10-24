<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_balasan extends Model
{
    use HasFactory;

    protected $table = 'pesan_balasan';
    protected $primaryKey = 'balasan_id';

    protected $fillable = [
        'balasan_waktu',
        'pesan_id',
        'balasan_user_id',
        'balasan_user_nip',
        'balasan_user_nama',
        'balasan_isi',
        'balasan_status',
    ];
}
