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
        Schema::create('data_pokja_kegiatan_bahp', function (Blueprint $table) {
            $table->integer('bahp_id');
            $table->primary(['bahp_id']);
            $table->timestamp('bahp_time');
            $table->string('bahp_nomor', 50)->nullable();
            $table->string('bahp_tanggal', 50)->nullable();
            $table->integer('bahp_id_keg')->nullable();
            $table->text('bahp_dok')->nullable();
            $table->string('bap_admin', 50)->nullable();
            $table->enum('upload_set_disposisi', ['0', '1'])->default('0');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pokja_kegiatan_bahp');
    }
};
