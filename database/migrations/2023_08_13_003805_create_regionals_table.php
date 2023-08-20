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
        Schema::create('regionals', function (Blueprint $table) {
            $table->id();
            $table->integer('city_id');
            $table->string('employes_id', 100);
            $table->integer('asesores');
            $table->string('type_sucursal', 2);
            $table->integer('clientesi');
            $table->float('carterainicio', 15, 2);
            $table->float('srinicio', 15, 2);
            $table->float('porsrinicio', 15, 2);
            $table->integer('clientesf');
            $table->float('carterafinal', 15, 2);
            $table->float('srfinal', 15, 2);
            $table->float('porsrfinal', 15, 2);
            $table->integer('category_adviser_id');
            $table->float('metacoloca', 15 ,2);
            $table->float('colocadoreal', 15, 2);
            $table->float('poralcancemetacoloca', 15, 2);
            $table->integer('diferenciaclientes');
            $table->integer('diferenciacartera');
            $table->float('bonoclientes');
            $table->float('bonoccolocacion');
            $table->float('bonoexcelencia');
            $table->float('bonofina', 12, 2);
            $table->float('base', 15, 2);
            $table->float('rmetac', 15, 2);
            $table->float('redsr', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regionals');
    }
};
