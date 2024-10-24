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
        Schema::create('log_info', function (Blueprint $table) {
            $table->integer('info_id');
            $table->primary(['info_id']);
            $table->integer('data_id')->nullable();
            $table->timestamp('waktu_progres');
            $table->text('info_progres')->nullable();
            $table->string('admin_progres', 300)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_info');
    }
};
