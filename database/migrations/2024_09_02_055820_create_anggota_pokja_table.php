<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaPokjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_pokja', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('password');
            $table->string('jabatan');
            $table->string('no_sk');
            $table->string('email')->unique();
            $table->string('no_hp');
            $table->foreignId('id_pokja')->constrained('pokja')->onDelete('cascade');
            $table->enum('status', ['0', '1']);
            $table->enum('rule', ['0', '1', '2', '3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_pokja');
    }
}
