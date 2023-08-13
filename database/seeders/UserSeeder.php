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
            'password' => bcrypt('ha260182ha'),
            'role_id' => 1
        ]);
        User::create([
            'name' => 'Alba Mireya',
            'email' => 'albamireyapc@gmail.com',
            'password' => bcrypt('am210681am'),
            'role_id' => 2
        ]);
    }
}
