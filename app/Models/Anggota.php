<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    public $incrementing = true;
    protected $keyType = 'int';


    protected $fillable = [
        'nip', 'nama','password', 'jabatan', 'no_sk', 'handphone', 'email', 'id_pokja','status','rule'
    ];

    public function pokja()
    {
        return $this->belongsTo(Pokja::class, 'id_pokja', 'id_pokja');
    }

    // // Relasi ke model Pokja
    // public function pokja()
    // {
    //     return $this->belongsTo(Pokja::class, 'id_pokja');
    // }
}
