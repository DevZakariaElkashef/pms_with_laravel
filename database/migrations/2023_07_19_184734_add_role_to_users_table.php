<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *  Role :
     *  0 => customer
     *  1 => admin
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->integer('role')->default(0);
            // $table->boolean('role');
            $table->enum('role', ['admin', 'customer'])->default('customer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
