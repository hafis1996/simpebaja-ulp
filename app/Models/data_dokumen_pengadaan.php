<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class data_dokumen_pengadaan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_dokumen_pengadaan';
    protected $primaryKey = 'dokumen_id';

    protected $fillable = [
        'dokumen_time',
        'dokumen_skpd',
        'dokumen_admin',
        'dokumen_kegiatan',
        'dokumen_kode',
        'dokumen_file',
        'dokumen_status',
        'dokumen_download',
    ];
}
