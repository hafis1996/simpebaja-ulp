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
        Schema::create('syarat_dokumen', function (Blueprint $table) {
            $table->id('syarat_id');
            $table->enum('jenis_pengadaan',['pengadaan_barang','jasa_konsultasi','pekerjaan_konstruksi','jasa_lainnya']);
            $table->string('nama_dokumen');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syarat_dokumen');
    }
};
