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
        Schema::create('lkpp_data_kegiatan', function (Blueprint $table) {
            $table->integer('id_data_k');
            $table->primary(['id_data_k']);
            $table->string('id_data_lkpp', 100)->nullable();
            $table->string('id_satket', 100)->nullable();
            $table->string('id_kegiatan', 100)->nullable();
            $table->string('id_program', 100)->nullable();
            $table->text('nama_kegiatan')->nullable();
            $table->double('pagu_kegiatan')->nullable();
            $table->string('tahun_anggaran', 100)->nullable();
            $table->enum('status_lkpp_keg', ['true', 'false']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpp_data_kegiatan');
    }
};
