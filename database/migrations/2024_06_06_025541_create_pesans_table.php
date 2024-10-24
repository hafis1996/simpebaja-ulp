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
        Schema::create('pesan', function (Blueprint $table) {
            $table->integer('pesan_id');
            $table->primary(['pesan_id']);
            $table->timestamp('pesan_waktu');
            $table->string('pesan_nama', 100);
            $table->string('pesan_hp', 30);
            $table->string('pesan_email', 90);
            $table->text('pesan_isi');
            $table->enum('pesan_status', ['0', '1', 'N'])->default('0');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan');
    }
};
