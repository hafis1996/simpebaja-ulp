<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class jenis_pengadaan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'jenis_pengadaan';
    protected $primaryKey = 'jenis_id ';

    protected $fillable = [
        'nama_pengadaan',
    ];

}
