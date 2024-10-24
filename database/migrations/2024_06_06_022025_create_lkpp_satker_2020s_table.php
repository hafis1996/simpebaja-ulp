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
        Schema::create('lkpp_satker_2020', function (Blueprint $table) {
            $table->integer('satker_id');
            $table->primary(['satker_id']);
            $table->string('id', 100);
            $table->string('id_kldi', 100);
            $table->string('id_satker', 100);
            $table->string('nama', 100);
            $table->text('tahun_aktif', 100);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lkpp_satker_2020');
    }
};
