<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('user_disposisi', function (Blueprint $table) {
    //         $table->integer('dis_id');
    //         $table->primary(['dis_id']);
    //         $table->string('user_nip', 50)->nullable();
    //         $table->string('user_nm_asli', 100)->nullable();
    //         $table->string('user_nama', 100)->nullable();
    //         $table->string('user_hp', 14)->nullable();
    //         $table->string('user_password')->nullable();
            
    //         $table->rememberToken();
    //         $table->timestamps();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('users');
    // }

    public function up(): void
    {
        if (!Schema::hasTable('user_disposisi')) {
            Schema::create('user_disposisi', function (Blueprint $table) {
                $table->integer('dis_id');
                $table->primary(['dis_id']);
                $table->string('user_nip', 50)->nullable();
                $table->string('user_nm_asli', 100)->nullable();
                $table->string('user_nama', 100)->nullable();
                $table->string('user_hp', 14)->nullable();
                $table->string('user_password')->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('user_disposisi')) {
            Schema::dropIfExists('user_disposisi');
        }
    }
};
