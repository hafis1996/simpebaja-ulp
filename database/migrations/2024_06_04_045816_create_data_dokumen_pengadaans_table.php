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
        Schema::create('data_dokumen_pengadaan', function (Blueprint $table) {
            $table->integer('dokumen_id');
            $table->primary(['dokumen_id']);
            $table->timestamp('dokumen_time');
            $table->string('dokumen_skpd')->nullable();
            $table->string('dokumen_admin')->nullable();
            $table->integer('dokumen_kegiatan')->nullable();
            $table->integer('dokumen_kode')->nullable();
            $table->text('dokumen_file')->nullable();
            $table->enum('dokumen_status', ['0','1'])->default('1');
            $table->enum('dokumen_download', ['0','1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dokumen_pengadaan');
    }
};
