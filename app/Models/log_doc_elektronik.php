<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_doc_elektronik extends Model
{
    use HasFactory;

    protected $table = 'log_doc_elektronik';
    protected $primaryKey = 'log_id';

    protected $fillable = [
        'log_time',
        'log_doc_set',
        'log_ip',
        'log_user',
        'log_user_set',
        'log_dokumen',
        'log_keterangan',
    ];
}
