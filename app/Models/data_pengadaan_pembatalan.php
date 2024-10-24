<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_pengadaan_pembatalan extends Model
{
    use HasFactory;

    protected $table = 'data_pengadaan';
    protected $primaryKey = 'data_id';

    protected $fillable = [
        'data_posting',
        'jenis_id',
        'skpd_id',
        'data_bulan',
        'data_tahun',
        'data_id_program',
        'id_prog_lkpp',
        'data_id_kegiatan',
        'id_kegiatan_lkpp',
        'sub_kegiatan',
        'data_kode_rekening',
        'pagu_anggaran',
        'id_data_objek',
        'data_sumber_dana',
        'data_jenis_kontrak_a',
        'data_jenis_kontrak_a_dt',
        'data_jenis_kontrak_b',
        'data_jenis_kontrak_b_dt',
        'data_jenis_kontrak_c',
        'data_jenis_kontrak_c_dt',
        'data_jenis_kontrak_d',
        'data_jenis_kontrak_d_dt',
        'data_ppk',
        'data_paket_pekerjaan',
        'data_lokasi',
        'data_hps',
        'data_paket_harga',
        'data_jwaktu_pelaksanaan',
        'data_rpelaksanaan_a',
        'data_rpelaksanaan_b',
        'data_status_upload_dok',
        'nama_pemenang',
        'alamat_pemenang',
        'npwp_pemenang',
        'data_status_kegiatan',
        'data_tanggal_verifikasi',
        'data_admin_verifikasi',
        'sts_disposisi',
        'time_disposisi',
        'verifikasi_spbbj',
        'time_disp_ver_sppbj',
        'status_sp_pokja',
        'sts_verifikasi_pokja',
        'time_verifikasi_pokja',
        'sts_disposisi_bahp',
        'time_disposisi_bahp',
        'verifikasi_bahp',
        'verifikasi_bahp_time',
        'jenis_kontrak',
        'no_surat',
        'tgl_surat',
        'jml_day',
        'jns_tahun',
        'tgl_evaluasi',
        'tgl_ex',
    ];
}
