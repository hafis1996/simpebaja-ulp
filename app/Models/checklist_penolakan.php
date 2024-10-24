<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class checklist_penolakan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'checklist_penolakan';
    protected $primaryKey = 'check_id_p';

    protected $fillable = [
        'check_id',
        'text_penolakan',
        'asal_penolakan',
        'tujuan_penolakan',
    ];
}
