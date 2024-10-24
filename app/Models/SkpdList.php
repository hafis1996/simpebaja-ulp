<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkpdList extends Model
{
    use HasFactory;

    protected $table = 'skpd_list';
    protected $primaryKey = 'skpd_id';
    public $incrementing = false; // Add this line if `skpd_id` is not auto-incrementing
    protected $keyType = 'string'; // Add this line if `skpd_id` is a string

    protected $fillable = [
        'skpd_id',
        'satker_id',
        'skpd_kat_id',
        'skpd_kode',
        'skpd_nama',
        'skpd_inisial',
        'skpd_alamat',
        'skpd_telp',
        'skpd_pimpinan',
        'skpd_pimpinan_nip',
        'skpd_pengajuan',
        'skpd_verifikasi',
        'skpd_e_lelang',
    ];

    // Tambahkan relasi hasMany dengan UserSkpd
    public function users()
    {
        return $this->hasMany(UserSkpd::class, 'skpd_id', 'skpd_id');
    }
}
