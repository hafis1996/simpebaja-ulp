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
    //     Schema::table('user_skpd', function (Blueprint $table) {
    //         $table->string('password', 100)->after('user_nip')->nullable();
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::table('user_skpd', function (Blueprint $table) {
    //         //
    //     });
    // }

    public function up(): void
    {
        Schema::table('user_skpd', function (Blueprint $table) {
            if (!Schema::hasColumn('user_skpd', 'password')) {
                $table->string('password', 100)->after('user_nip')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_skpd', function (Blueprint $table) {
            if (Schema::hasColumn('user_skpd', 'password')) {
                $table->dropColumn('password');
            }
        });
    }
};
