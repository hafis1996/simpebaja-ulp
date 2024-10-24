<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan';
    protected $primaryKey = 'pesan_id';

    protected $fillable = [
        'pesan_waktu',
        'pesan_nama',
        'pesan_hp',
        'pesan_email',
        'pesan_isi',
        'pesan_status',
    ];
}
