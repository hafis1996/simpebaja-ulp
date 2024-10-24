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
        Schema::create('lkpp_data_program', function (Blueprint $table) {
            $table->integer('id_data_p');
            $table->primary(['id_data_p']);
            $table->string('id_data_p_lkpp', 100)->nullable();
            $table->string('id_program', 100)->nullable();
            $table->string('tahun_program', 5)->nullable();
            $table->string('id_satker', 100)->nullable();
            $table->text('nama_program')->nullable();
            $table->double('pagu_program')->nullable();
            $table->enum('status_lkpp', ['true', 'false'])->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpp_data_program');
    }
};
