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
        Schema::create('penilaian_poll', function (Blueprint $table) {
            $table->integer('poll_id');
            $table->primary(['poll_id']);
            $table->timestamp('poll_time');
            $table->string('poll_ip', 30);
            $table->text('poll_access');
            $table->string('poll_nama', 50);
            $table->string('poll_hp', 20);
            $table->enum('poll_value', ['C', 'B', 'SB']);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian_poll');
    }
};
