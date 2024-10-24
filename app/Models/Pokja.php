<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokja extends Model
{
    use HasFactory;

    protected $table = 'pokja';
  
     protected $primaryKey = 'id_pokja';

    protected $fillable = [
        'nip', 'nama', 'jabatan', 'no_sk', 'handphone', 'email'
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'id_pokja','id_pokja');
    }

    //  // Relasi ke model Anggota
    // public function anggota()
    // {
    //     return $this->hasMany(Anggota::class, 'id_pokja');
    // }
}
