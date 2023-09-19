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
        Schema::create('salary_employees', function (Blueprint $table) {
            $table->id();
            $table->integer('employ2_id');
            $table->integer('salaryperiod_id');
            $table->float('salario');
            $table->float('prevsoc');
            $table->float('subsidio');
            $table->float('descuento');
            $table->float('segsoc');
            $table->float('infonavit');
            $table->integer('workingdays')->default(15);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_employees');
    }
};
