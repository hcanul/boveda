<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'superuser']);
        $role = Role::create(['name' => 'administrador']);
        $role = Role::create(['name' => 'asesor']);
        $role = Role::create(['name' => 'regional']);
        $role = Role::create(['name' => 'coordinador']);
        $role = Role::create(['name' => 'gerente']);
    }
}
