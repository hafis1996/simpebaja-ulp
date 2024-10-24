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
        Schema::create('data_evaluasi', function (Blueprint $table) {
            $table->integer('eva_id');
            $table->primary(['eva_id']);
            $table->string('eva_skpd')->nullable();
            $table->integer('eva_pengadaan')->nullable();
            $table->text('eva_kegiatan')->nullable();
            $table->text('eva_teks_evaluasi')->nullable();
            $table->timestamp('eva_time_replay')->nullable();
            $table->enum('eva_status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_evaluasi');
    }
};
