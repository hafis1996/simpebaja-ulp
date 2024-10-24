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
        Schema::create('checklist_pengadaan', function (Blueprint $table) {
            $table->integer('check_id');
            $table->primary(['check_id']);
            $table->integer('pengadaan_id')->nullable();
            $table->timestamp('waktu_disposisi');
            $table->integer('asal_disposisi')->nullable();
            $table->string('nm_asli_asal', 100)->nullable();
            $table->string('nip_asal', 100)->nullable();
            $table->string('jabatan_asal', 100)->nullable();
            $table->string('penerima_disposisi', 300)->nullable();
            $table->string('nm_asli_penerima', 100)->nullable();
            $table->string('nip_penerima', 100)->nullable();
            $table->string('jabatan_penerima', 100)->nullable();
            $table->string('waktu_approved', 50)->nullable();
            $table->string('key_approved', 15)->nullable();
            $table->text('note_approve')->nullable();
            $table->enum('progres_approve', ['Kelengkapan', 'SP_POKJA', 'BAHP'])->default('Kelengkapan'); 
            $table->enum('status_persetujuan', ['0', '1', 'R', 'E'])->default('0'); 
            $table->enum('sts_aproved', ['0', '1', 'E'])->default('0'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist_pengadaan');
    }
};
