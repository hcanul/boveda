<?php

namespace Database\Seeders;

use App\Models\Employes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employes::create([
            'name' => 'MARTHA PATRICIA 	ARANA MARTINEZ',
            'city_id' => 1,
            'typeemployes_id' => 1
        ]);
        Employes::create([
            'name' => 'EDWIN POOL',
            'city_id' => 1,
            'typeemployes_id' => 2
        ]);
        Employes::create([
            'name' => 'JUAN CAAMAL',
            'city_id' => 1,
            'typeemployes_id' => 2
        ]);
        Employes::create([
            'name' => 'MANUEL YEH',
            'city_id' => 1,
            'typeemployes_id' => 2
        ]);
        Employes::create([
            'name' => 'DARWIN GARCIA',
            'city_id' => 1,
            'typeemployes_id' => 2
        ]);
        Employes::create([
            'name' => 'GEOVANY LARA',
            'city_id' => 1,
            'typeemployes_id' => 2
        ]);

        Employes::create([
            'name' => 'JUAN CARLOS CAAMAL CANO',
            'city_id' => 1,
            'typeemployes_id' => 3
        ]);

        Employes::create([
            'name' => 'INGRID BRITO ESTRELLA',
            'city_id' => 2,
            'typeemployes_id' => 1
        ]);
        Employes::create([
            'name' => 'JESSICA KARINA MORALES',
            'city_id' => 3,
            'typeemployes_id' => 1
        ]);
        Employes::create([
            'name' => 'ROSARIO BOLON ROMERO',
            'city_id' => 4,
            'typeemployes_id' => 1
        ]);
    }
}
