<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
   
    use HasFactory;

    protected $table = 'evaluasi';

    protected $fillable = [
        'user_id',
        'pesan',
        'status',
        'tanggapi_at',
    ];

    public function user()
    {
        return $this->belongsTo(UserSkpd::class, 'user_id');
    }
}
