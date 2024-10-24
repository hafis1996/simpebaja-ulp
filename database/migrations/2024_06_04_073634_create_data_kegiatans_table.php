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
        Schema::create('data_kegiatan', function (Blueprint $table) {
            $table->integer('kegiatan_id');
            $table->primary(['kegiatan_id']);
            $table->string('skpd_id')->nullable();
            $table->integer('program_id')->nullable();
            $table->string('lkpp_id_satker', 50)->nullable();
            $table->string('lkpp_id_kegiatan', 50)->nullable();
            $table->string('lkpp_id_program', 50)->nullable();
            $table->double('lkpp_anggaran')->nullable();
            $table->string('lkpp_ta', 50)->nullable();
            $table->string('kegiatan_kode_rekening', 100)->nullable();
            $table->text('kegiatan_nama')->nullable();
            $table->enum('kegiatan_status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kegiatan');
    }
};
