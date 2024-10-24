<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class data_evaluasi extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_evaluasi';
    protected $primaryKey = 'eva_id';

    protected $fillable = [
        'eva_skpd',
        'eva_pengadaan',
        'eva_kegiatan',
        'eva_teks_evaluasi',
        'eva_time_replay',
        'eva_status',
    ];
}
