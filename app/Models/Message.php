<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // protected $fillable = ['from_user_id', 'to_user_id', 'message'];

    // // Relasi ke user (pengirim)
    // public function fromUser()
    // {
    //     return $this->belongsTo(UserUlp::class, 'from_user_id');
    // }

    // // Relasi ke user_skpd (penerima)
    // public function toUserSkpd()
    // {
    //     return $this->belongsTo(UserSkpd::class, 'to_user_id');
    // }
use HasFactory;

    protected $fillable = ['from_user_id', 'to_user_id', 'message','status', 'data_pengadaan_id'];

    // Relasi ke user (pengirim)
    public function fromUser()
    {
        return $this->belongsTo(UserUlp::class, 'from_user_id');
    }

    // Relasi ke user_skpd (penerima)
    public function toUserSkpd()
    {
        return $this->belongsTo(UserSkpd::class, 'to_user_id');
    }

    // Relasi ke data_pengadaan
    public function dataPengadaan()
    {
        return $this->belongsTo(DataPengadaan::class, 'data_pengadaan_id', 'data_id');
    }

}

