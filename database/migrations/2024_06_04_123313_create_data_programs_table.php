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
        Schema::create('data_program', function (Blueprint $table) {
            $table->integer('program_id');
            $table->primary(['program_id']);
            $table->string('id_program_lkpp', 100)->nullable();
            $table->string('program_skpd')->nullable();
            $table->string('program_kode_rekening', 100)->nullable();
            $table->text('program_nama')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_program');
    }
};
