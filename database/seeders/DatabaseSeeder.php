<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CoinSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(EmployesSeeder::class);
        $this->call(CategoryAdviserSeeder::class);
        $this->call(CategoryCordinatorSeed::class);
        $this->call(CategoryManagerSeed::class);
        $this->call(CategoryRegionalSeed::class);
        $this->call(TypeemployeSeed::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AssingRoleTousersSeeder::class);
    }
}
