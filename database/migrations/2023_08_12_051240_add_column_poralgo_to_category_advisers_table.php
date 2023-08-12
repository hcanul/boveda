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
        Schema::table('category_advisers', function (Blueprint $table) {
            $table->float('pagoinc', 10, 4);
            $table->float('poralgo', 10, 4);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('category_advisers', function (Blueprint $table) {
            $table->dropColumn('pagoinc');
            $table->dropColumn('poralgo');
        });
    }
};
