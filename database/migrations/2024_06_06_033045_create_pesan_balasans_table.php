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
        Schema::create('pesan_balasan', function (Blueprint $table) {
            $table->integer('balasan_id');
            $table->primary(['balasan_id']);
            $table->timestamp('balasan_waktu');
            $table->integer('pesan_id');
            $table->string('balasan_user_id', 300);
            $table->string('balasan_user_nip', 50);
            $table->string('balasan_user_nama', 100);
            $table->text('balasan_isi');
            $table->enum('balasan_status', ['0', '1'])->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesan_balasan');
    }
};
