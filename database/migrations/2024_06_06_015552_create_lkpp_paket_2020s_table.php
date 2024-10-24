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
        Schema::create('lkpp_paket_2020', function (Blueprint $table) {
            $table->integer('paket_id');
            $table->primary(['paket_id']);
            $table->string('klpd', 100);
            $table->string('tahunanggaran', 5);
            $table->string('idrup', 50);
            $table->text('namapaket');
            $table->double('jumlahpagu');
            $table->string('namasatker', 100);
            $table->string('kodesatker', 100);
            $table->string('metodepengadaan', 50);
            $table->integer('idmetodepengadaan');
            $table->string('jenispengadaan', 100);
            $table->integer('idjenispengadaan');
            $table->text('spesifikasi');
            $table->string('lokasi', 100);
            $table->string('tanggalkebutuhan', 50);
            $table->string('tanggalawalpemilihan', 50);
            $table->string('tanggalakhirpemilihan', 50);
            $table->string('tanggalawalpekerjaan', 50);
            $table->string('tanggalakhirpekerjaan', 50);
            $table->string('statuspradipa', 100);
            $table->string('statuspenyedia', 100);
            $table->string('statustkdn', 100);
            $table->string('statususahakecil', 100);
            $table->string('statusumumkan', 100);
            $table->text('keterangan');
            $table->string('ppk', 100);
            $table->string('nip_ppk', 100);
            $table->string('tanggalpengumuman', 50);
            $table->string('id_rup_client', 50);
            $table->string('kd_klpd', 50);
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpp_paket_2020');
    }
};
