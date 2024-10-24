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
        Schema::create('data_interaktif', function (Blueprint $table) {
            $table->integer('interaktif_id');
            $table->primary(['interaktif_id']);
            $table->timestamp('interaktif_time');
            $table->string('interaktif_from')->nullable();
            $table->string('interaktif_form_name')->nullable();
            $table->string('interaktif_to')->nullable();
            $table->text('interaktif_title')->nullable();
            $table->text('interaktif_messages')->nullable();
            $table->text('interaktif_attch')->nullable();
            $table->enum('interaktif_status_read', ['0', '1'])->default('0');
            $table->enum('interaktif_status_msg', ['Active', 'Delete', 'Archived'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_interaktif');
    }
};
