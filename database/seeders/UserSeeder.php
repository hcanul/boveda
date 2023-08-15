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
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Hugo Paulino Canul Echazarreta',
            'email' => 'cyber.frenetic@gmail.com',
            'password' => bcrypt('ha260182ha'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'prueba1',
            'email' => 'prueba1@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 2
        ]);
        User::create([
            'name' => 'prueba2',
            'email' => 'prueba2@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 3
        ]);
        User::create([
            'name' => 'prueba3',
            'email' => 'prueba3@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 4
        ]);
        User::create([
            'name' => 'prueba4',
            'email' => 'prueba4@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 5
        ]);
        User::create([
            'name' => 'prueba5',
            'email' => 'prueba5@gmail.com',
            'password' => bcrypt('12345678'),
            'role_id' => 6
        ]);
    }
}
