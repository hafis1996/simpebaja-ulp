<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pokja_sub extends Model
{
    use HasFactory;

    protected $table = 'data_pokja_sub';
    protected $primaryKey = 'pokja_id';

    protected $fillable = [
        'pokja_data',
        'pokja_nip',
        'pokja_nama',
        'pokja_jabatan',
        'pokja_no_sk',
        'pokja_cp',
        'pokja_email',
        'pokja_usernm',
        'password',
    ];
}
