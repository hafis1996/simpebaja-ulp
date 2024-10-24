<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_ulp', function (Blueprint $table) {
           
           $table->string('ulp_id');
            $table->primary(['ulp_id']);
            $table->timestamp('ulp_register')->default(DB::raw('CURRENT_TIMESTAMP'));
            // $table->string('skpd_id')->nullable();
            $table->string('ulp_nip', 50)->nullable();
            $table->string('ulp_nama', 50)->nullable();
            $table->text('ulp_alamat')->nullable();
            $table->string('ulp_email', 100)->nullable();
            $table->string('ulp_hp', 20)->nullable();
            $table->string('ulp_username')->nullable();
            $table->string('ulp_password')->nullable();

            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->enum('level', ['superadmin', 'admin'])->default('admin');
            // $table->rememberToken();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_ulp');
    }
};