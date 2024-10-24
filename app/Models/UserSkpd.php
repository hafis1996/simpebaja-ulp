<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserSkpd extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user_skpd';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_register',
        'skpd_id',
        'user_nip',
        'password',
        'user_nama',
        'user_alamat',
        'user_email',
        'user_hp',
        'user_usernm',
        'user_status',
        'user_rule',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function skpdList()
{
    return $this->belongsTo(SkpdList::class, 'skpd_id', 'skpd_id');
}

}
