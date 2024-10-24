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
        Schema::create('data_ppk', function (Blueprint $table) {
            $table->integer('ppk_id');
            $table->primary(['ppk_id']);
            $table->string('skpd_id')->nullable();
            $table->string('ppk_nip', 50)->nullable();
            $table->string('ppk_nama', 100)->nullable();
            $table->string('ppk_jabatan', 100)->nullable();
            $table->string('ppk_no_sk', 100)->nullable();
            $table->string('ppk_cp', 20)->nullable();
            $table->string('ppk_usernm')->nullable();
            $table->string('password')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ppk');
    }
};
