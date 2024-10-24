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
        Schema::create('data_kpa', function (Blueprint $table) {
            $table->integer('kpa_id');
            $table->primary(['kpa_id']);
            $table->integer('data_id')->nullable();
            $table->string('kpa_tempat', 100)->nullable();
            $table->date('kpa_waktu')->nullable();
            $table->string('kpa_instansi', 100)->nullable();
            $table->string('kpa_jabatan', 100)->nullable();
            $table->string('kpa_nama_kpa', 100)->nullable();
            $table->string('kpa_nip', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kpa');
    }
};
