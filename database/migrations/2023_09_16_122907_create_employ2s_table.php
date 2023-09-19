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
        Schema::create('employ2s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->date('birthdate');
            $table->enum('gender',['Masculino', 'Femenino', 'Otro']);
            $table->string('phone');
            $table->integer('bio_id');
            $table->string('numIne');
            $table->string('direccion');
            $table->integer('city_id');
            $table->string('rfc');
            $table->string('imss');
            $table->date('fechaIni');
            $table->date('fechaFin')->nullable();
            $table->string('departamento');
            $table->string('cargo');
            $table->enum('activo',['Activo', 'Bloqueado'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employ2s');
    }
};
