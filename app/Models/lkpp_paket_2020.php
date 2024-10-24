<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lkpp_paket_2020 extends Model
{
    use HasFactory;

    protected $table = 'lkpp_paket_2020';
    protected $primaryKey = 'paket_id';

    protected $fillable = [
        'klpd',
        'tahunanggaran',
        'idrup',
        'namapaket',
        'jumlahpagu',
        'namasatker',
        'kodesatker',
        'metodepengadaan',
        'idmetodepengadaan',
        'jenispengadaan',
        'idjenispengadaan',
        'spesifikasi',
        'lokasi',
        'tanggalkebutuhan',
        'tanggalawalpemilihan',
        'tanggalakhirpemilihan',
        'tanggalawalpekerjaan',
        'tanggalakhirpekerjaan',
        'statuspradipa',
        'statuspenyedia',
        'statustkdn',
        'statususahakecil',
        'statusumumkan',
        'keterangan',
        'ppk',
        'nip_ppk',
        'tanggalpengumuman',
        'id_rup_client',
        'kd_klpd',
    ];
}
