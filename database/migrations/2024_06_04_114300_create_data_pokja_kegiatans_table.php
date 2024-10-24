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
        Schema::create('data_pokja_kegiatan', function (Blueprint $table) {
            $table->integer('keg_pokja_id');
            $table->primary(['keg_pokja_id']);
            $table->timestamp('keg_pokja_time');
            $table->string('pokja_id')->nullable();
            $table->text('pokja_sk')->nullable();
            $table->date('keg_pokja_tanggal')->nullable();
            $table->integer('keg_pokja_keg')->nullable();
            $table->text('keg_bahp')->nullable();
            $table->date('keg_date_bahp')->nullable();
            $table->text('keg_dok_pra')->nullable();
            $table->date('keg_date_dok_pra')->nullable();
            $table->enum('keg_surat_ppenyedia', ['0', '1'])->default('0');
            $table->string('keg_time_spl', 50)->nullable();
            $table->enum('bahp_approved', ['0', '1'])->default('0');
            $table->string('bahp_time', 50)->nullable();
            $table->string('keg_set_admin', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pokja_kegiatan');
    }
};
