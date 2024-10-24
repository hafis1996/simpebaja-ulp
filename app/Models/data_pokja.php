<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pokja extends Model
{
    use HasFactory;

    protected $table = 'data_pokja';
    protected $primaryKey = 'pokja_id';

    protected $fillable = [
        'nama_pokja',
        'pokja_nip',
        'pokja_nama',
        'pokja_jabatan',
        'pokja_no_sk',
        'pokja_cp',
        'pokja_email',
        'pokja_usernm',
        'password',
        'pokja_status',
    ];
}
