<?php

namespace Database\Seeders;

use App\Models\Typeemployes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeemployeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Typeemployes::create(['name' => 'Administrador']);
        Typeemployes::create(['name' => 'Asesor']);
        Typeemployes::create(['name' => 'Coordinador']);
        Typeemployes::create(['name' => 'Gerente']);
        Typeemployes::create(['name' => 'Regional']);
    }
}
