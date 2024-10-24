<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class data_interaktif extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'data_interaktif';
    protected $primaryKey = 'interaktif_id';

    protected $fillable = [
        'interaktif_time',
        'interaktif_from',
        'interaktif_form_name',
        'interaktif_to',
        'interaktif_title',
        'interaktif_messages',
        'interaktif_attch',
        'interaktif_status_read',
        'interaktif_status_msg',
    ];
}
