<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian_poll extends Model
{
    use HasFactory;

    protected $table = 'penilaian_poll';
    protected $primaryKey = 'poll_id';

    protected $fillable = [
        'poll_time',
        'poll_ip',
        'poll_access',
        'poll_nama',
        'poll_hp',
        'poll_value',
    ];
}
