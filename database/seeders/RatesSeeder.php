<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rates')->insert(
            [
                'name'=>'Base',
                'cicle' =>'0',
                'Minamount' => '0',
                'Maxamount' => '0',
                'rate' => '80',
            ]);
            DB::table('rates')->insert([
                'name'=>'Bronce',
                'cicle' =>'4',
                'Minamount' => '40000',
                'Maxamount' => '0',
                'rate' => '79',
            ]);
            DB::table('rates')->insert([
                'name'=>'Plata',
                'cicle' =>'8',
                'Minamount' => '60000',
                'Maxamount' => '0',
                'rate' => '78',
            ]);
            DB::table('rates')->insert([
                'name'=>'Esmeralda',
                'cicle' =>'12',
                'Minamount' => '90000',
                'Maxamount' => '0',
                'rate' => '77',
            ]);
            DB::table('rates')->insert([
                'name'=>'Oro',
                'cicle' =>'14',
                'Minamount' => '100000',
                'Maxamount' => '0',
                'rate' => '76',
            ],);
            DB::table('rates')->insert([
                'name'=>'Rubi',
                'cicle' =>'17',
                'Minamount' => '100000',
                'Maxamount' => '0',
                'rate' => '75',
            ]);
            DB::table('rates')->insert([
                'name'=>'Platinum',
                'cicle' =>'18',
                'Minamount' => '100000',
                'Maxamount' => '0',
                'rate' => '74',
            ]);
    }
}
