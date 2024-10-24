<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_pengadaan_pembatalan', function (Blueprint $table) {
            $table->integer('data_id');
            $table->primary(['data_id']);
            $table->timestamp('data_posting');
            $table->integer('jenis_id')->nullable();
            $table->string('skpd_id', 200)->nullable();
            $table->integer('data_bulan')->nullable();
            $table->string('data_tahun', 5)->nullable();
            $table->integer('data_id_program')->nullable();
            $table->string('id_prog_lkpp', 50)->nullable();
            $table->integer('data_id_kegiatan')->nullable();
            $table->string('id_kegiatan_lkpp', 50)->nullable();
            $table->text('sub_kegiatan')->nullable();
            $table->string('data_kode_rekening', 100)->nullable();
            $table->double('pagu_anggaran')->nullable();
            $table->string('id_data_objek', 50)->nullable();
            $table->integer('data_sumber_dana')->nullable();
            $table->integer('data_jenis_kontrak_a')->nullable();
            $table->string('data_jenis_kontrak_a_dt', 50)->nullable();
            $table->integer('data_jenis_kontrak_b')->nullable();
            $table->string('data_jenis_kontrak_b_dt', 50)->nullable();
            $table->integer('data_jenis_kontrak_c')->nullable();
            $table->string('data_jenis_kontrak_c_dt', 50)->nullable();
            $table->integer('data_jenis_kontrak_d')->nullable();
            $table->string('data_jenis_kontrak_d_dt', 50)->nullable();
            $table->string('data_ppk', 300)->nullable();
            $table->text('data_paket_pekerjaan')->nullable();
            $table->text('data_lokasi')->nullable();
            $table->double('data_hps')->nullable();
            $table->double('data_paket_harga')->nullable();
            $table->string('data_jwaktu_pelaksanaan', 50)->nullable();
            $table->date('data_rpelaksanaan_a')->nullable();
            $table->date('data_rpelaksanaan_b')->nullable();
            $table->enum('data_status_upload_dok', ['0','1'])->default(0);  
            $table->string('nama_pemenang', 100)->nullable();
            $table->text('alamat_pemenang')->nullable();
            $table->string('npwp_pemenang', 100)->nullable();
            $table->enum('data_status_kegiatan', ['Pengajuan','Verifikasi','Evaluasi','E-Lelang','E-X','Pembatalan'])->default('Pengajuan');  
            $table->string('data_tanggal_verifikasi', 30)->nullable();
            $table->string('data_admin_verifikasi', 200)->nullable();
            $table->enum('sts_disposisi', ['0','1'])->default(0);  
            $table->string('time_disposisi', 50)->nullable();
            $table->enum('verifikasi_spbbj', ['N','Y'])->default('N');  
            $table->string('time_disp_ver_sppbj', 50)->nullable();
            $table->enum('status_sp_pokja', ['0','1'])->default('0');  
            $table->enum('sts_verifikasi_pokja', ['0','1'])->default('0');  
            $table->string('time_verifikasi_pokja', 40)->nullable();
            $table->enum('sts_disposisi_bahp', ['0','1'])->default('0'); 
            $table->string('time_disposisi_bahp', 50)->nullable();
            $table->enum('verifikasi_bahp', ['0','1'])->default('0'); 
            $table->string('verifikasi_bahp_time', 50)->nullable();
            $table->string('jenis_kontrak', 100)->nullable();
            $table->string('no_surat', 50)->nullable();
            $table->string('tgl_surat', 50)->nullable();
            $table->integer('jml_day')->nullable();
            $table->string('jns_tahun', 50)->nullable();
            $table->string('tgl_evaluasi', 30)->nullable();
            $table->string('tgl_ex', 30)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pengadaan_pembatalan');
    }
};
