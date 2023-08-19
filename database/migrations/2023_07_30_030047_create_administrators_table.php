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
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('employes_id', 100);
            $table->integer('asesores');
            $table->string('typesucursal', 2);
            $table->integer('category_id');
            $table->integer('clientesi');
            $table->float('carterainicio', 20, 2);
            $table->integer('clientesf');
            $table->float('colocadoreal', 20, 2);
            $table->integer('diferenciaclientes');
            $table->float('bonoclientes', 20, 2);
            $table->float('bonoccolocacion', 20, 2);
            $table->float('bonofina', 12, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
