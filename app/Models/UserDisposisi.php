<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserDisposisi extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user_disposisi';
    protected $primaryKey = 'dis_id';

    protected $fillable = [
        'user_nip',
        'user_nm_asli',
        'user_nama',
        'user_hp',
    ];

    protected $hidden = [
        'user_password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
