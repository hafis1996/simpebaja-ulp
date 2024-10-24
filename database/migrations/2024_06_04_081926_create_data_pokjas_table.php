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
        Schema::create('data_pokja', function (Blueprint $table) {
            $table->integer('pokja_id');
            $table->primary(['pokja_id']);
            $table->string('nama_pokja', 100)->nullable();
            $table->string('pokja_nip', 50)->nullable();
            $table->string('pokja_nama', 100)->nullable();
            $table->string('pokja_jabatan', 100)->nullable();
            $table->string('pokja_no_sk', 100)->nullable();
            $table->string('pokja_cp', 20)->nullable();
            $table->string('pokja_email', 100)->nullable();
            $table->string('pokja_usernm')->nullable();
            $table->string('password')->nullable();
            $table->enum('pokja_status', ['0', '1'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pokja');
    }
};
