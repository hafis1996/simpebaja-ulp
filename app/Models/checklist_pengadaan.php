<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class checklist_pengadaan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'checklist_pengadaan';
    protected $primaryKey = 'check_id';

    protected $fillable = [
        'pengadaan_id',
        'waktu_disposisi',
        'asal_disposisi',
        'nm_asli_asal',
        'nip_asal',
        'jabatan_asal',
        'penerima_disposisi',
        'nm_asli_penerima',
        'nip_penerima',
        'jabatan_penerima',
        'waktu_approved',
        'key_approved',
        'note_approve',
        'progres_approve',
        'status_persetujuan',
        'sts_aproved',
    ];
}
