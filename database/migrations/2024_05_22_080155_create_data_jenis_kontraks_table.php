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
        Schema::create('data_jenis_kontrak', function (Blueprint $table) {
            $table->integer('jenis_k_id');
            $table->primary(['jenis_k_id']);
            $table->string('jenis_k_nama')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_jenis_kontrak');
    }
};
