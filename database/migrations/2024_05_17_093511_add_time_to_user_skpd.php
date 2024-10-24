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
    //         $table->timestamps();
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
            if (!Schema::hasColumn('user_skpd', 'created_at') && !Schema::hasColumn('user_skpd', 'updated_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_skpd', function (Blueprint $table) {
            if (Schema::hasColumn('user_skpd', 'created_at')) {
                $table->dropColumn('created_at');
            }
            if (Schema::hasColumn('user_skpd', 'updated_at')) {
                $table->dropColumn('updated_at');
            }
        });
    }
};
