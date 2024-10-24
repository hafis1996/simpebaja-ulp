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
        Schema::create('log_doc_elektronik', function (Blueprint $table) {
            $table->integer('log_id');
            $table->primary(['log_id']);
            $table->timestamp('log_time');
            $table->enum('log_doc_set', ['SP_POKJA', 'BAHP'])->default('SP_POKJA');
            $table->string('log_ip', 50);
            $table->string('log_user', 300);
            $table->string('log_user_set', 100);
            $table->string('log_dokumen', 300);
            $table->text('log_keterangan');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_doc_elektronik');
    }
};
