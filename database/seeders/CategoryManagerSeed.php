<?php

namespace Database\Seeders;

use App\Models\CategoryManager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryManagerSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryManager::create([
            'name' => 'Desarrollo',
            'type' => 'A',
            'min'=> 0,
            'max'=> 1200000,
            'porcpago' => 0.006,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 0,
            'transporte' => 1000,
            'meta' => 100,
            'porpago' => 100
        ]);

        CategoryManager::create([
            'name' => 'Junior',
            'type' => 'A',
            'min'=> 1200001,
            'max'=> 2400000,
            'porcpago' => 0.007,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 95,
            'porpago' => 100
        ]);

        CategoryManager::create([
            'name' => 'Senior',
            'type' => 'A',
            'min'=> 2400001,
            'max'=> 3600000,
            'porcpago' => 0.008,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);

        CategoryManager::create([
            'name' => 'Master',
            'type' => 'A',
            'min'=> 3600001,
            'max'=> 9999999,
            'porcpago' => 0.009,
            'pagocrecliente' => 20,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);
    }
}
