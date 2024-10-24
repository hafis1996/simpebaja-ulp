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
         Schema::create('evaluasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to userskpd table
            $table->text('pesan'); // Evaluation message
            $table->boolean('status')->default(0); // Status: 0 = Pending, 1 = Addressed
            $table->timestamp('tanggapi_at')->nullable(); // Timestamp for when evaluation was addressed
            $table->timestamps();

            // Foreign key constraint to user_skpd table
            $table->foreign('user_id')->references('user_id')->on('user_skpd')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi');
    }
};
