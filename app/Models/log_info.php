<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_info extends Model
{
    use HasFactory;

    protected $table = 'log_info';
    protected $primaryKey = 'info_id';

    protected $fillable = [
        'data_id',
        'waktu_progres',
        'info_progres',
        'admin_progres',
    ];
}
