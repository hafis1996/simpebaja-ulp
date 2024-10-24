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
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('profil_id');
            $table->primary(['profil_id']);
            $table->string('profil_institusi')->nullable();
            $table->string('profil_pimpinan')->nullable();
            $table->string('profil_nip', 100)->nullable();
            $table->text('profil_alamat')->nullable();
            $table->string('profil_si_inisial', 100)->nullable();
            $table->string('profile_si', 500)->nullable();
            $table->text('profil_visi')->nullable();
            $table->text('profil_misi')->nullable();
            $table->text('profil_struktur')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
