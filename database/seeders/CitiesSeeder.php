<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cities::create(['name'=>'Carrillo']);
        Cities::create(['name'=>'Morelos']);
        Cities::create(['name'=>'Tulum']);
        Cities::create(['name'=>'Playa1']);
        Cities::create(['name'=>'Playa2']);
        Cities::create(['name'=>'CanCun1']);
        Cities::create(['name'=>'CanCun2']);
        Cities::create(['name'=>'Bacalar']);
    }
}
