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
        Schema::table('advisers', function (Blueprint $table) {
            $table->float('base', 15, 2);
            $table->float('rmetac', 15, 2);
            $table->float('redsr', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advisers', function (Blueprint $table) {
            $table->dropColumn('base');
            $table->dropColumn('rmetac');
            $table->dropColumn('redsr');
        });
    }
};
