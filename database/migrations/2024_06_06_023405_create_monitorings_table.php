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
        Schema::create('monitoring', function (Blueprint $table) {
            $table->integer('monitoring_id');
            $table->primary(['monitoring_id']);
            $table->string('skpd_id')->nullable();
            $table->string('skpd_nama', 100)->nullable();
            $table->string('tahun_anggaran', 5)->nullable();
            $table->integer('jumlah_pengajuan')->nullable();
            $table->integer('jumlah_verifikasi')->nullable();
            $table->integer('jumlah_evaluasi')->nullable();
            $table->integer('jumlah_e_lelang')->nullable();
            $table->double('jumlah_hps')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring');
    }
};
