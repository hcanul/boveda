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
            'name' => 'Jaime Alberto Lopez Alonso',
            'email' => 'j_aguila_10@hotmail.com',
            'password' => bcrypt('10titan10'),
            'profile' => 'superuser',
            'status' => 'Active'
        ]);

        User::create([
            'name' => 'Hugo Paulino Canul Echazarreta',
            'email' => 'cyber.frenetic@gmail.com',
            'password' => bcrypt('ha260182ha'),
            'profile' => 'superuser',
            'status' => 'Active'
        ]);
    }
}
