<?php

namespace Database\Seeders;

use App\Models\branch_type_manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchTypeManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        branch_type_manager::create(['name'=> 'A', 'rangeinit'=>0, 'rangefin'=>2]);
        branch_type_manager::create(['name'=> 'B', 'rangeinit'=>3, 'rangefin'=>3]);
        branch_type_manager::create(['name'=> 'C', 'rangeinit'=>3, 'rangefin'=>99999]);
    }
}
