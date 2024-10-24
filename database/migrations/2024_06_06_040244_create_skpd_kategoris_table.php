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
        Schema::create('skpd_kategori', function (Blueprint $table) {
            $table->integer('skpd_kat_id');
            $table->primary(['skpd_kat_id']);
            $table->string('skpd_kat_name', 50)->nullable();
            $table->string('skpd_kat_pimpinan', 50)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skpd_kategori');
    }
};
