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
        Schema::create('blogroll', function (Blueprint $table) {
            $table->integer('blog_id');
            $table->primary(['blog_id']);
            $table->string('blog_name', 100)->nullable();
            $table->string('blog_link', 100)->nullable();
            $table->enum('blog_status', ['Y', 'N'])->default('Y');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogroll');
    }
};
