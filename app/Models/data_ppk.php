<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class data_ppk extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_ppk';
    protected $primaryKey = 'ppk_id';

    protected $fillable = [
        'skpd_id',
        'ppk_nip',
        'ppk_nama',
        'ppk_jabatan',
        'ppk_no_sk',
        'ppk_cp',
        'ppk_usernm',
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
