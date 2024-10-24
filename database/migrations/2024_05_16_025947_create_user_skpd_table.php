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
    //     Schema::create('user_skpd', function (Blueprint $table) {
    //         if (!Schema::hasColumn('user_skpd', 'created_at')) {
    //             $table->timestamp('created_at')->nullable();
    //         }
    //         if (!Schema::hasColumn('user_skpd', 'updated_at')) {
    //             $table->timestamp('updated_at')->nullable();
    //         }
    //         $table->string('user_id');
    //         $table->primary(['user_id']);
    //         $table->timestamp('user_register');
    //         $table->string('user_skpd')->nullable();
    //         $table->string('user_nip', 50)->nullable();
    //         $table->string('user_nama', 50)->nullable();
    //         $table->text('user_alamat')->nullable();
    //         $table->string('user_email', 100)->nullable();
    //         $table->string('user_hp', 20)->nullable();
    //         $table->string('user_usernm')->nullable();
    //         $table->string('user_passwd')->nullable();
    //         $table->enum('user_status', ['0', '1'])->default(0);
    //         $table->enum('user_rule', ['0', '1', '2', '3'])->default(0);
    //     });
    // }

    // /**
    //  * Reverse the migrations.
    //  */
    // // public function down(): void
    // // {
    // //     Schema::dropIfExists('user_skpd');
    // // }

    //  public function down(): void
    // {
    //     Schema::table('user_skpd', function (Blueprint $table) {
    //         if (Schema::hasColumn('user_skpd', 'created_at')) {
    //             $table->dropColumn('created_at');
    //         }
    //         if (Schema::hasColumn('user_skpd', 'updated_at')) {
    //             $table->dropColumn('updated_at');
    //         }
    //     });
    // }

    //  public function up(): void
    // {
        public function up(): void
{
    if (!Schema::hasTable('user_skpd')) {
        Schema::create('user_skpd', function (Blueprint $table) {
            $table->string('user_id');
            $table->primary(['user_id']);
            $table->timestamp('user_register')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('skpd_id')->nullable();
            $table->string('user_nip', 50)->nullable();
            $table->string('user_nama', 50)->nullable();
            $table->text('user_alamat')->nullable();
            $table->string('user_email', 100)->nullable();
            $table->string('user_hp', 20)->nullable();
            $table->string('user_usernm')->nullable();
            $table->string('user_passwd')->nullable();
            $table->enum('user_status', ['0', '1'])->default(0);
            $table->enum('user_rule', ['0', '1', '2', '3'])->default(0);
            $table->timestamps();
        });
    } else {
        Schema::table('user_skpd', function (Blueprint $table) {
            if (!Schema::hasColumn('user_skpd', 'skpd_id')) {
                $table->string('skpd_id')->nullable();
            }
            if (!Schema::hasColumn('user_skpd', 'user_register')) {
                $table->timestamp('user_register')->default(DB::raw('CURRENT_TIMESTAMP'));
            }
            if (!Schema::hasColumn('user_skpd', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('user_skpd', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_skpd', function (Blueprint $table) {
            if (Schema::hasColumn('user_skpd', 'skpd_id')) {
                $table->dropColumn('skpd_id');
            }
            if (Schema::hasColumn('user_skpd', 'created_at')) {
                $table->dropColumn('created_at');
            }
            if (Schema::hasColumn('user_skpd', 'updated_at')) {
                $table->dropColumn('updated_at');
            }
        });
    }


};


