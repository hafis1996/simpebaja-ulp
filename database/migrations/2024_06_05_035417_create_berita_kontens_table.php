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
        Schema::create('berita_konten', function (Blueprint $table) {
            $table->integer('berita_id');
            $table->primary(['berita_id']);
            $table->integer('berita_kat_id')->nullable();
            $table->timestamp('berita_post');
            $table->string('berita_admin', 200)->nullable();
            $table->string('berita_judul')->nullable();
            $table->text('berita_permalink')->nullable();
            $table->text('berita_isi')->nullable();
            $table->string('berita_gambar')->nullable();
            $table->integer('berita_baca')->nullable();
            $table->enum('berita_status', ['1', '0'])->default('1');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_konten');
    }
};
