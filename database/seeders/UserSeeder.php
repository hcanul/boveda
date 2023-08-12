<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Hugo Canul',
            'email' => 'cyber.frenetic@gmail.com',
            'password' => bcrypt('ha260182ha')
        ]);
    }
}
