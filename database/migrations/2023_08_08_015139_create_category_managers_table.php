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
        Schema::create('category_managers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->string('type');
            $table->float('min', 14,4);
            $table->float('max', 14,4);
            $table->float('porcpago', 10,4);
            $table->integer('pagocrecliente')->default(20);
            $table->integer('bonoexcelencia');
            $table->integer('transporte');
            $table->integer('meta');
            $table->integer('porpago');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_managers');
    }
};
