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
        Schema::create('jenis_kontrak', function (Blueprint $table) {
            $table->integer('kontrak_id');
            $table->primary(['kontrak_id']);
            $table->integer('pengadaan_id')->nullable();
            $table->string('kontrak_nama', 100)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kontrak');
    }
};
