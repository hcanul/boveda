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
        Schema::create('moneyplaya2s', function (Blueprint $table) {
            $table->id();
            $table->enum('operacion', ['+', '-']);
            $table->integer('bmil')->nullable();
            $table->integer('bqui')->nullable();
            $table->integer('bdoc')->nullable();
            $table->integer('bcie')->nullable();
            $table->integer('bcin')->nullable();
            $table->integer('bvei')->nullable();
            $table->integer('mvei')->nullable();
            $table->integer('mdie')->nullable();
            $table->integer('mcin')->nullable();
            $table->integer('mdos')->nullable();
            $table->integer('muno')->nullable();
            $table->integer('mpci')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moneyplaya2s');
    }
};
