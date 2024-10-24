<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polling extends Model
{
    use HasFactory;

    protected $table = 'polling';
    protected $primaryKey = 'pol_id';

    protected $fillable = [
        'pol_post',
        'pol_tahun',
        'pol_user_id',
        'pol_skpd_id',
        'pol_value',
        'pol_komen',
    ];
}
