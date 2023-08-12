<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create([
            'name' => 'Desarrollo',
            'type' => 'A',
            'min'=> 0,
            'max'=> 1200000,
            'porcpago' => 0.002,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 0,
            'transporte' => 1000,
            'meta' => 100,
            'porpago' => 100
        ]);
        Categories::create([
            'name' => 'Junior',
            'type' => 'A',
            'min'=> 1200001,
            'max'=> 2400000,
            'porcpago' => 0.002,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 95,
            'porpago' => 100
        ]);
        Categories::create([
            'name' => 'Senior',
            'type' => 'A',
            'min'=> 2400001,
            'max'=> 3600000,
            'porcpago' => 0.0025,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);
        Categories::create([
            'name' => 'Master',
            'type' => 'A',
            'min'=> 3600001,
            'max'=> 9999999,
            'porcpago' => 0.0025,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);

        Categories::create([
            'name' => 'Desarrollo',
            'type' => 'B',
            'min'=> 0,
            'max'=> 1800000,
            'porcpago' => 0.002,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 0,
            'transporte' => 1000,
            'meta' => 100,
            'porpago' => 100
        ]);
        Categories::create([
            'name' => 'Junior',
            'type' => 'B',
            'min'=> 1800001,
            'max'=> 3600000,
            'porcpago' => 0.002,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 95,
            'porpago' => 100
        ]);
        Categories::create([
            'name' => 'Senior',
            'type' => 'B',
            'min'=> 3600001,
            'max'=> 5400000,
            'porcpago' => 0.0025,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);
        Categories::create([
            'name' => 'Master',
            'type' => 'B',
            'min'=> 5400001,
            'max'=> 9999999,
            'porcpago' => 0.0025,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);
    }
}
