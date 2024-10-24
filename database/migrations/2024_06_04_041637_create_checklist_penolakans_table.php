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
        Schema::create('checklist_penolakan', function (Blueprint $table) {
            $table->integer('check_id_p');
            $table->primary(['check_id_p']);
            $table->integer('check_id')->nullable();
            $table->text('text_penolakan')->nullable();
            $table->integer('asal_penolakan')->nullable();
            $table->integer('tujuan_penolakan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklist_penolakan');
    }
};
