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
        Schema::create('polling', function (Blueprint $table) {
            $table->integer('pol_id');
            $table->primary(['pol_id']);
            $table->timestamp('pol_post');
            $table->string('pol_tahun');
            $table->string('pol_user_id', 300);
            $table->string('pol_skpd_id', 300);
            $table->enum('pol_value', ['0', '1', '2']);
            $table->text('pol_komen');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polling');
    }
};
