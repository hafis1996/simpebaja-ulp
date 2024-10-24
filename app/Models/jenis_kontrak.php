<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kontrak extends Model
{
    use HasFactory;

    protected $table = 'jenis_kontrak';
    protected $primaryKey = 'kontrak_id';

    protected $fillable = [
        'pengadaan_id',
        'kontrak_nama',
    ];
}
