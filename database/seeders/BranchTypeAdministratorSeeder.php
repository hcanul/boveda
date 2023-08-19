<?php

namespace Database\Seeders;

use App\Models\branch_type_administrator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchTypeAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        branch_type_administrator::create(['name'=> 'A', 'rangeinit'=>0, 'rangefin'=>2]);
        branch_type_administrator::create(['name'=> 'B', 'rangeinit'=>3, 'rangefin'=>3]);
        branch_type_administrator::create(['name'=> 'C', 'rangeinit'=>3, 'rangefin'=>99999]);
    }
}
