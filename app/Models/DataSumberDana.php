<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class DataSumberDana extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_sumber_dana';
    protected $primaryKey = 'dana_id';

    protected $fillable = [
        'dana_skpd',
        'dana_nama',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
