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
        Schema::create('data_jenis_kontrak_detil', function (Blueprint $table) {
            $table->integer('jenis_k_detil_id');
            $table->primary(['jenis_k_detil_id']);
            $table->integer('jenis_k_id')->nullable();
            $table->string('jenis_k_detil_nama', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jenis_kontrak_detil');
    }
};
