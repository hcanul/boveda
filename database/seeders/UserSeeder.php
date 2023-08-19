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

        User::create([
            'name' => 'prueba1',
            'email' => 'prueba1@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'administrador',
            'status' => 'Active'
        ]);
        User::create([
            'name' => 'prueba2',
            'email' => 'prueba2@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'asesor',
            'status' => 'Active'
        ]);
        User::create([
            'name' => 'prueba3',
            'email' => 'prueba3@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'regional',
            'status' => 'Active'
        ]);
        User::create([
            'name' => 'prueba4',
            'email' => 'prueba4@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'coordinador',
            'status' => 'Active'
        ]);
        User::create([
            'name' => 'prueba5',
            'email' => 'prueba5@gmail.com',
            'password' => bcrypt('12345678'),
            'profile' => 'gerente',
            'status' => 'Active'
        ]);
    }
}
