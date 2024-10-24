<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogroll extends Model
{
    use HasFactory;

    protected $table = 'blogroll';
    protected $primaryKey = 'blog_id';

    protected $fillable = [
        'blog_name',
        'blog_link',
        'blog_status',
    ];
}
