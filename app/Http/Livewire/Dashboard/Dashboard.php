<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {

        return view('livewire.dashboard.dashboard', [
            'carrillo' => $this->supersumaCarrillo(),
            'morelos' => $this->supersumaMorelos(),
            'tulum' => $this->supersumaTulum(),
            'playa1' => $this->supersumaPlaya1(),
            'playa2' => $this->supersumaPlaya2(),
            ])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    protected function supersumaCarrillo()
    {
        $valores =[
            'bmil' => 1000,
            'bqui' => 500,
            'bdoc' => 200,
            'bcie' => 100,
            'bcin' => 50,
            'bvei' => 20,
            'mvei' => 20,
            'mdie' => 10,
            'mcin' => 5,
            'mdos' => 2,
            'muno' => 1,
            'mpci' => 0.50
        ];
        $resultado = DB::table('moneyfcps')
                        ->select(DB::raw("
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bmil * {$valores['bmil']}) as total_bmil,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bqui * {$valores['bqui']}) as total_bqui,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bdoc * {$valores['bdoc']}) as total_bdoc,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcie * {$valores['bcie']}) as total_bcie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcin * {$valores['bcin']}) as total_bcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bvei * {$valores['bvei']}) as total_bvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mvei * {$valores['mvei']}) as total_mvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdie * {$valores['mdie']}) as total_mdie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mcin * {$valores['mcin']}) as total_mcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdos * {$valores['mdos']}) as total_mdos,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * muno * {$valores['muno']}) as total_muno,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mpci * {$valores['mpci']}) as total_mpci,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * (bmil * {$valores['bmil']} + bqui * {$valores['bqui']} + bdoc * {$valores['bdoc']} +
                                                        bcie * {$valores['bcie']} + bcin * {$valores['bcin']} + bvei * {$valores['bvei']} +
                                                        mvei * {$valores['mvei']} + mdie * {$valores['mdie']} + mcin * {$valores['mcin']} +
                                                        mdos * {$valores['mdos']} + muno * {$valores['muno']} + mpci * {$valores['mpci']})) as total_general
                    "))
                    ->first();
        return '$' . number_format($resultado->total_general, 2);
    }

    protected function supersumaMorelos()
    {
        $valores =[
            'bmil' => 1000,
            'bqui' => 500,
            'bdoc' => 200,
            'bcie' => 100,
            'bcin' => 50,
            'bvei' => 20,
            'mvei' => 20,
            'mdie' => 10,
            'mcin' => 5,
            'mdos' => 2,
            'muno' => 1,
            'mpci' => 0.50
        ];
        $resultado = DB::table('moneymorelos')
                        ->select(DB::raw("
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bmil * {$valores['bmil']}) as total_bmil,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bqui * {$valores['bqui']}) as total_bqui,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bdoc * {$valores['bdoc']}) as total_bdoc,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcie * {$valores['bcie']}) as total_bcie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcin * {$valores['bcin']}) as total_bcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bvei * {$valores['bvei']}) as total_bvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mvei * {$valores['mvei']}) as total_mvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdie * {$valores['mdie']}) as total_mdie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mcin * {$valores['mcin']}) as total_mcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdos * {$valores['mdos']}) as total_mdos,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * muno * {$valores['muno']}) as total_muno,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mpci * {$valores['mpci']}) as total_mpci,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * (bmil * {$valores['bmil']} + bqui * {$valores['bqui']} + bdoc * {$valores['bdoc']} +
                                                        bcie * {$valores['bcie']} + bcin * {$valores['bcin']} + bvei * {$valores['bvei']} +
                                                        mvei * {$valores['mvei']} + mdie * {$valores['mdie']} + mcin * {$valores['mcin']} +
                                                        mdos * {$valores['mdos']} + muno * {$valores['muno']} + mpci * {$valores['mpci']})) as total_general
                    "))
                    ->first();
        return '$' . number_format($resultado->total_general, 2);
    }

    protected function supersumaTulum()
    {
        $valores =[
            'bmil' => 1000,
            'bqui' => 500,
            'bdoc' => 200,
            'bcie' => 100,
            'bcin' => 50,
            'bvei' => 20,
            'mvei' => 20,
            'mdie' => 10,
            'mcin' => 5,
            'mdos' => 2,
            'muno' => 1,
            'mpci' => 0.50
        ];
        $resultado = DB::table('moneytulums')
                        ->select(DB::raw("
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bmil * {$valores['bmil']}) as total_bmil,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bqui * {$valores['bqui']}) as total_bqui,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bdoc * {$valores['bdoc']}) as total_bdoc,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcie * {$valores['bcie']}) as total_bcie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcin * {$valores['bcin']}) as total_bcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bvei * {$valores['bvei']}) as total_bvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mvei * {$valores['mvei']}) as total_mvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdie * {$valores['mdie']}) as total_mdie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mcin * {$valores['mcin']}) as total_mcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdos * {$valores['mdos']}) as total_mdos,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * muno * {$valores['muno']}) as total_muno,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mpci * {$valores['mpci']}) as total_mpci,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * (bmil * {$valores['bmil']} + bqui * {$valores['bqui']} + bdoc * {$valores['bdoc']} +
                                                        bcie * {$valores['bcie']} + bcin * {$valores['bcin']} + bvei * {$valores['bvei']} +
                                                        mvei * {$valores['mvei']} + mdie * {$valores['mdie']} + mcin * {$valores['mcin']} +
                                                        mdos * {$valores['mdos']} + muno * {$valores['muno']} + mpci * {$valores['mpci']})) as total_general
                    "))
                    ->first();
        return '$' . number_format($resultado->total_general, 2);
    }

    protected function supersumaPlaya1()
    {
        $valores =[
            'bmil' => 1000,
            'bqui' => 500,
            'bdoc' => 200,
            'bcie' => 100,
            'bcin' => 50,
            'bvei' => 20,
            'mvei' => 20,
            'mdie' => 10,
            'mcin' => 5,
            'mdos' => 2,
            'muno' => 1,
            'mpci' => 0.50
        ];
        $resultado = DB::table('moneyplaya1s')
                        ->select(DB::raw("
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bmil * {$valores['bmil']}) as total_bmil,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bqui * {$valores['bqui']}) as total_bqui,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bdoc * {$valores['bdoc']}) as total_bdoc,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcie * {$valores['bcie']}) as total_bcie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcin * {$valores['bcin']}) as total_bcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bvei * {$valores['bvei']}) as total_bvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mvei * {$valores['mvei']}) as total_mvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdie * {$valores['mdie']}) as total_mdie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mcin * {$valores['mcin']}) as total_mcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdos * {$valores['mdos']}) as total_mdos,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * muno * {$valores['muno']}) as total_muno,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mpci * {$valores['mpci']}) as total_mpci,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * (bmil * {$valores['bmil']} + bqui * {$valores['bqui']} + bdoc * {$valores['bdoc']} +
                                                        bcie * {$valores['bcie']} + bcin * {$valores['bcin']} + bvei * {$valores['bvei']} +
                                                        mvei * {$valores['mvei']} + mdie * {$valores['mdie']} + mcin * {$valores['mcin']} +
                                                        mdos * {$valores['mdos']} + muno * {$valores['muno']} + mpci * {$valores['mpci']})) as total_general
                    "))
                    ->first();
        return '$' . number_format($resultado->total_general, 2);
    }

    protected function supersumaPlaya2()
    {
        $valores =[
            'bmil' => 1000,
            'bqui' => 500,
            'bdoc' => 200,
            'bcie' => 100,
            'bcin' => 50,
            'bvei' => 20,
            'mvei' => 20,
            'mdie' => 10,
            'mcin' => 5,
            'mdos' => 2,
            'muno' => 1,
            'mpci' => 0.50
        ];
        $resultado = DB::table('moneyplaya2s')
                        ->select(DB::raw("
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bmil * {$valores['bmil']}) as total_bmil,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bqui * {$valores['bqui']}) as total_bqui,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bdoc * {$valores['bdoc']}) as total_bdoc,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcie * {$valores['bcie']}) as total_bcie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bcin * {$valores['bcin']}) as total_bcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * bvei * {$valores['bvei']}) as total_bvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mvei * {$valores['mvei']}) as total_mvei,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdie * {$valores['mdie']}) as total_mdie,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mcin * {$valores['mcin']}) as total_mcin,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mdos * {$valores['mdos']}) as total_mdos,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * muno * {$valores['muno']}) as total_muno,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * mpci * {$valores['mpci']}) as total_mpci,
                        SUM(CASE WHEN operacion = '+' THEN 1 ELSE -1 END * (bmil * {$valores['bmil']} + bqui * {$valores['bqui']} + bdoc * {$valores['bdoc']} +
                                                        bcie * {$valores['bcie']} + bcin * {$valores['bcin']} + bvei * {$valores['bvei']} +
                                                        mvei * {$valores['mvei']} + mdie * {$valores['mdie']} + mcin * {$valores['mcin']} +
                                                        mdos * {$valores['mdos']} + muno * {$valores['muno']} + mpci * {$valores['mpci']})) as total_general
                    "))
                    ->first();
        return '$' . number_format($resultado->total_general, 2);
    }
}
