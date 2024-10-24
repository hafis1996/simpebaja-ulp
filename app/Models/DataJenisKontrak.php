<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class DataJenisKontrak extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_jenis_kontrak';
    protected $primaryKey = 'jenis_k_id';

    protected $fillable = [
        'jenis_k_nama',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
