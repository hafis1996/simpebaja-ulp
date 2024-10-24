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
        Schema::create('data_pa', function (Blueprint $table) {
            $table->integer('pa_id');
            $table->primary(['pa_id']);
            $table->integer('data_id')->nullable();
            $table->string('pa_instansi', 100)->nullable();
            $table->string('pa_jabatan', 100)->nullable();
            $table->string('pa_nama_pa', 100)->nullable();
            $table->string('pa_nip', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pa');
    }
};
