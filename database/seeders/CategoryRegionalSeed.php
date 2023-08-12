<?php

namespace Database\Seeders;

use App\Models\CategoryRegional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryRegionalSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryRegional::create([
            'name' => 'Desarrollo',
            'min'=> 0,
            'max'=> 4800000,
            'porcpago' => 0.001,
            'pagocrecliente' => 0,
            'bonoexcelencia' => 0,
            'transporte' => 1000,
            'meta' => 90,
            'porpago' => 100
        ]);

        CategoryRegional::create([
            'name' => 'Junior',
            'min'=> 4800001,
            'max'=> 9600000,
            'porcpago' => 0.002,
            'pagocrecliente' => 0,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);

        CategoryRegional::create([
            'name' => 'Senior',
            'min'=> 9600001,
            'max'=> 14400000,
            'porcpago' => 0.003,
            'pagocrecliente' => 0,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);

        CategoryRegional::create([
            'name' => 'Master',
            'min'=> 14400001,
            'max'=> 9999999,
            'porcpago' => 0.004,
            'pagocrecliente' => 0,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);
    }
}
