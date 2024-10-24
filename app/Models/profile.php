<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $primaryKey = 'profil_id';

    protected $fillable = [
        'profil_institusi',
        'profil_pimpinan',
        'profil_nip',
        'profil_alamat',
        'profil_si_inisial',
        'profile_si',
        'profil_visi',
        'profil_misi',
        'profil_struktur',
    ];
}
