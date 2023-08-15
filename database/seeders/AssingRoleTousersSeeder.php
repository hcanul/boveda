<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssingRoleTousersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permiso = Permission::create(['name' => 'ver todo']); //Jaime
        $permiso1 = Permission::create(['name' => 'ver administrador']);
        $permiso2 = Permission::create(['name' => 'ver asesor']);
        $permiso3 = Permission::create(['name' => 'ver coordinador']);
        $permiso4 = Permission::create(['name' => 'ver gerente']);
        $permiso5 = Permission::create(['name' => 'ver regional']);

        $role = Role::where('name', 'superuser')->first();
        $role->givePermissionTo($permiso);
        $role->givePermissionTo($permiso1);
        $role->givePermissionTo($permiso2);
        $role->givePermissionTo($permiso3);
        $role->givePermissionTo($permiso4);
        $role->givePermissionTo($permiso5);
        $users = User::where('role_id', '=', '1')->get();
        foreach ($users as  $user)
        {
            $user->assignRole($role);
        }



        $role1 = Role::where('name', 'administrador')->first();
        $role1->givePermissionTo($permiso1);
        $users1 = User::where('role_id', '=', '2')->get();
        foreach ($users1 as  $user)
        {
            $user->assignRole($role1);
        }

        $role2 = Role::where('name', 'asesor')->first();
        $role2->givePermissionTo($permiso2);
        $users2 = User::where('role_id', '=', '3')->get();
        foreach ($users2 as $user) {
            $user->assignRole($role2);
        }

        $role3 = Role::where('name', 'coordinador')->first();
        $role3->givePermissionTo($permiso3);
        $users3 = User::where('role_id', '=', '4')->get();
        foreach ($users3 as $user) {
            $user->assignRole($role3);
        }

        $role4 = Role::where('name', 'gerente')->first();
        $role4->givePermissionTo($permiso4);
        $users4 = User::where('role_id', '=', '5')->get();
        foreach ($users4 as $user) {
            $user->assignRole($role4);
        }

        $role4 = Role::where('name', 'regional')->first();
        $role4->givePermissionTo($permiso4);
        $users4 = User::where('role_id', '=', '6')->get();
        foreach ($users4 as $user) {
            $user->assignRole($role4);
        }
    }
}
