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
        Schema::create('lkpp_data_kegiatan_sub', function (Blueprint $table) {
            $table->integer('sub_id');
            $table->primary(['sub_id']);
            $table->integer('data_id')->nullable();
            $table->integer('program_id')->nullable();
            $table->integer('kegiatan_id')->nullable();
            $table->string('kode_objek', 50)->nullable();
            $table->text('uraian_objek')->nullable();
            $table->double('pagu_objek')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpp_data_kegiatan_sub');
    }
};
