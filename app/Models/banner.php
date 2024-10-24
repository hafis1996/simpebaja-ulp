<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;

    protected $table = 'banner';
    protected $primaryKey = 'banner_id';

    protected $fillable = [
        'banner_img',
        'banner_posisi',
        'banner_status',
    ];
}
