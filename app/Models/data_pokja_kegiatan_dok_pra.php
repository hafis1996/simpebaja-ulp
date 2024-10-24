<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pokja_kegiatan_dok_pra extends Model
{
    use HasFactory;

    protected $table = 'data_pokja_kegiatan_dok_pra';
    protected $primaryKey = 'dok_pra_id';

    protected $fillable = [
        'dok_pra_time',
        'dok_pra_id_keg',
        'dok_pra_dok',
        'dok_pra_admin',
    ];
}
