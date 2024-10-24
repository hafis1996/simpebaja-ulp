<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserUlp extends Authenticatable
{
    // use HasFactory;
     use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users_ulp';

    protected $primaryKey = 'ulp_id';

    public $incrementing = true;

    // protected $keyType = 'string';

    protected $fillable = [
        // 'ulp_id',
        'ulp_nip',
        'ulp_nama',
        'ulp_alamat',
        'ulp_email',
        'ulp_hp',
        'ulp_username',
        'ulp_password',
        'level',
    ];

    protected $hidden = [
        'ulp_password',
    ];
}
