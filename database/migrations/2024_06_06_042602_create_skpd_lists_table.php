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
        Schema::create('skpd_list', function (Blueprint $table) {
            $table->integer('skpd_id');
            $table->primary(['skpd_id']);
            $table->string('satker_id', 50)->nullable();
            $table->integer('skpd_kat_id')->nullable();
            $table->string('skpd_kode', 50)->nullable();
            $table->string('skpd_nama', 200)->nullable();
            $table->string('skpd_inisial', 100)->nullable();
            $table->text('skpd_alamat')->nullable();
            $table->string('skpd_telp', 30)->nullable();
            $table->string('skpd_pimpinan', 100)->nullable();
            $table->string('skpd_pimpinan_nip', 50)->nullable();
            $table->integer('skpd_pengajuan')->nullable();
            $table->integer('skpd_verifikasi')->nullable();
            $table->integer('skpd_e_lelang')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skpd_list');
    }
};
