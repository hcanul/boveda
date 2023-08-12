<?php

namespace Database\Seeders;

use App\Models\CategoryAdviser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryAdviserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryAdviser::create([
            'name' => 'Desarrollo',
            'min'=> 0,
            'max'=> 600000,
            'porcpago' => 0.010,
            'pagocrecliente' => 60,
            'bonoexcelencia' => 0,
            'transporte' => 1000,
            'meta' => 100,
            'porpago' => 100
        ]);

        CategoryAdviser::create([
            'name' => 'Junior',
            'min'=> 600001,
            'max'=> 1200000,
            'porcpago' => 0.015,
            'pagocrecliente' => 60,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 95,
            'porpago' => 100
        ]);

        CategoryAdviser::create([
            'name' => 'Senior',
            'min'=> 1200001,
            'max'=> 1800000,
            'porcpago' => 0.020,
            'pagocrecliente' => 60,
            'bonoexcelencia' => 1000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);

        CategoryAdviser::create([
            'name' => 'Master',
            'min'=> 1800001,
            'max'=> 9999999,
            'porcpago' => 0.025,
            'pagocrecliente' => 60,
            'bonoexcelencia' => 2000,
            'transporte' => 2000,
            'meta' => 90,
            'porpago' => 100
        ]);
    }
}
