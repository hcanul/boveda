<?php

namespace Database\Seeders;

use App\Models\Coin;
use Illuminate\Database\Seeder;

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Coin::create([
            'type'=>'Billete',
            'value'=>1000,
        ]);
        Coin::create([
            'type'=>'Billete',
            'value'=>500,
        ]);
        Coin::create([
            'type'=>'Billete',
            'value'=>200,
        ]);
        Coin::create([
            'type'=>'Billete',
            'value'=>100,
        ]);
        Coin::create([
            'type'=>'Billete',
            'value'=>50,
        ]);
        Coin::create([
            'type'=>'Billete',
            'value'=>20,
        ]);
        Coin::create([
            'type'=>'Moneda',
            'value'=>20,
        ]);
        Coin::create([
            'type'=>'Moneda',
            'value'=>10,
        ]);
        Coin::create([
            'type'=>'Moneda',
            'value'=>5,
        ]);
        Coin::create([
            'type'=>'Moneda',
            'value'=>2,
        ]);
        Coin::create([
            'type'=>'Moneda',
            'value'=>1,
        ]);
        Coin::create([
            'type'=>'Moneda',
            'value'=>0.50,
        ]);
    }
}
