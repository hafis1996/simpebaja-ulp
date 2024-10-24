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
        Schema::create('lkpp_data_satker', function (Blueprint $table) {
            $table->integer('id_data_set');
            $table->primary(['id_data_set']);
            $table->string('id_dinas', 30)->nullable();
            $table->string('id_satker', 50)->nullable();
            $table->string('nama_dinas')->nullable();
            $table->text('tahun_aktif')->nullable();
            $table->enum('status_aktif', ['0', '1'])->default('1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpp_data_satker');
    }
};
