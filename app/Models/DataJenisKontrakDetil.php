<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class DataJenisKontrakDetil extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_jenis_kontrak_detil';
    protected $primaryKey = 'jenis_k_detil_id ';

    protected $fillable = [
        'jenis_k_id',
        'jenis_k_detil_nama',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
