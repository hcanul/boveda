<?php

namespace Database\Seeders;

use App\Models\branch_type_coordinators;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchTypeCoordinatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        branch_type_coordinators::create(['name'=> 'A', 'rangeinit'=>0, 'rangefin'=>2]);
        branch_type_coordinators::create(['name'=> 'B', 'rangeinit'=>3, 'rangefin'=>3]);
        branch_type_coordinators::create(['name'=> 'C', 'rangeinit'=>3, 'rangefin'=>99999]);
    }
}
