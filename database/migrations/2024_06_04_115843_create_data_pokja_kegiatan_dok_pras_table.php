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
        Schema::create('data_pokja_kegiatan_dok_pra', function (Blueprint $table) {
            $table->integer('dok_pra_id');
            $table->primary(['dok_pra_id']);
            $table->timestamp('dok_pra_time');
            $table->integer('dok_pra_id_keg')->nullable();
            $table->text('dok_pra_dok')->nullable();
            $table->string('dok_pra_admin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pokja_kegiatan_dok_pra');
    }
};
