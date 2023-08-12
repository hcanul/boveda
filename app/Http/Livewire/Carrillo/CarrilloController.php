<?php

namespace App\Http\Livewire\Carrillo;

use App\Models\Coin;
use App\Models\moneyfcps;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CarrilloController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName, $show;

    public $Billete1000, $Billete500, $Billete200, $Billete100, $Billete50, $Billete20;

    public $Moneda20, $Moneda10, $Moneda5, $Moneda2, $Moneda1, $Moneda50c;

    public $tBillete1000, $tBillete500, $tBillete200, $tBillete100, $tBillete50, $tBillete20;

    public $tMoneda20, $tMoneda10, $tMoneda5, $tMoneda2, $tMoneda1, $tMoneda50c;

    public $total, $operacion, $superTotal;

    protected $listeners = ['deleteRow' => 'Destroy'];

    private $pagination = 10;

    protected $rules = [
        'operacion' => 'required|not_in:Elegir',
    ];

    protected $messages = [
        'operacion.required' => 'Debe elejir una operación, para ejecutar',
        'operacion.not_in' => 'Elige una operación valida',

    ];

    public function mount()
    {
        $this->Billete1000 = null;
        $this->Billete500 = null;
        $this->Billete200 = null;
        $this->Billete100 = null;
        $this->Billete50 = null;
        $this->Billete20 = null;
        $this->Moneda20 = null;
        $this->Moneda10 = null;
        $this->Moneda5 = null;
        $this->Moneda2 = null;
        $this->Moneda1 = null;
        $this->Moneda50c = null;

        $this->tBillete1000 = null;
        $this->tBillete500 = null;
        $this->tBillete200 = null;
        $this->tBillete100 = null;
        $this->tBillete50 = null;
        $this->tBillete20 = null;

        $this->tMoneda20 = null;
        $this->tMoneda10 = null;
        $this->tMoneda5 = null;
        $this->tMoneda2 = null;
        $this->tMoneda1 = null;
        $this->tMoneda50c = null;

        $this->pageTitle = 'Listado';
        $this->componentName = 'BOVEDA CARRILLO';
        $this->selected_id = 0;
        $this->show = false;
        $this->total = null;
        $this->operacion = null;
    }

    public function render()
    {
        if($this->search){
            $data = moneyfcps::where('created_at', 'like', '%' . $this->search .'%')->paginate($this->pagination);
            $this->superTotal = $this->supersuma($this->search);
        }else{
            $data = moneyfcps::orderBy('id', 'asc')->paginate($this->pagination);
            $this->superTotal = $this->supersuma(null);
        }
        return view('livewire.carrillo.carrillo', ['data' => $data, 'denominacion' => Coin::all()])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    public function resetUI()
    {
        $this->Billete1000 = null;
        $this->Billete500 = null;
        $this->Billete200 = null;
        $this->Billete100 = null;
        $this->Billete50 = null;
        $this->Billete20 = null;
        $this->Moneda20 = null;
        $this->Moneda10 = null;
        $this->Moneda5 = null;
        $this->Moneda2 = null;
        $this->Moneda1 = null;
        $this->Moneda50c = null;

        $this->tBillete1000 = null;
        $this->emit('tB1000',$this->tBillete1000);
        $this->tBillete500 = null;
        $this->emit('tB500',$this->tBillete500);
        $this->tBillete200 = null;
        $this->emit('tB200',$this->tBillete200);
        $this->tBillete100 = null;
        $this->emit('tB100',$this->tBillete100);
        $this->tBillete50 = null;
        $this->emit('tB50',$this->tBillete50);
        $this->tBillete20 = null;
        $this->emit('tB20',$this->tBillete20);
        $this->tMoneda20 = null;
        $this->emit('tM20',$this->tMoneda20);
        $this->tMoneda10 = null;
        $this->emit('tM10',$this->tMoneda10);
        $this->tMoneda5 = null;
        $this->emit('tM5',$this->tMoneda5);
        $this->tMoneda2 = null;
        $this->emit('tM2',$this->tMoneda2);
        $this->tMoneda1 = null;
        $this->emit('tM1',$this->tMoneda1);
        $this->tMoneda50c = null;
        $this->emit('tM50c',$this->tMoneda50c);

        $this->tMoneda20 = null;
        $this->emit('tM20',$this->tMoneda20);

        $this->total = null;
        $this->pageTitle = 'Listado';
        $this->componentName = 'Boveda Carrillo';
        $this->selected_id = 0;
        $this->show = false;
        $this->operacion = null;
    }

    protected function suma()
    {
        $this->total = $this->Billete1000 * 1000 +
                        $this->Billete500 * 500 +
                        $this->Billete200 * 200 +
                        $this->Billete100 * 100 +
                        $this->Billete50 * 50 +
                        $this->Billete20 * 20 +
                        $this->Moneda20 * 20 +
                        $this->Moneda10 * 10 +
                        $this->Moneda5 * 5 +
                        $this->Moneda2 * 2 +
                        $this->Moneda1 * 1 +
                        $this->Moneda50c * 0.50 ;
    }

    public function fBillete1000()
    {
        $this->tBillete1000 = number_format(1000 * $this->Billete1000, 2);
        $this->emit('tB1000',$this->tBillete1000);
        $this->suma();
    }

    public function fBillete500()
    {
        $this->tBillete500 = number_format(500 * $this->Billete500, 2);
        $this->emit('tB500',$this->tBillete500);
        $this->suma();
    }

    public function fBillete200()
    {
        $this->tBillete200 = number_format(200 * $this->Billete200, 2);
        $this->emit('tB200',$this->tBillete200);
        $this->suma();
    }

    public function fBillete100()
    {
        $this->tBillete100 = number_format(100 * $this->Billete100, 2);
        $this->emit('tB100',$this->tBillete100);
        $this->suma();
    }

    public function fBillete50()
    {
        $this->tBillete50 = number_format(50 * $this->Billete50, 2);
        $this->emit('tB50',$this->tBillete50);
        $this->suma();
    }

    public function fBillete20()
    {
        $this->tBillete20 = number_format(20 * $this->Billete20, 2);
        $this->emit('tB20',$this->tBillete20);
        $this->suma();
    }

    public function fMoneda20()
    {
        $this->tMoneda20 = number_format(20 * $this->Moneda20, 2);
        $this->emit('tM20',$this->tMoneda20);
        $this->suma();
    }

    public function fMoneda10()
    {
        $this->tMoneda10 = number_format(10 * $this->Moneda10, 2);
        $this->emit('tM10',$this->tMoneda10);
        $this->suma();
    }

    public function fMoneda5()
    {
        $this->tMoneda5 = number_format(5 * $this->Moneda5, 2);
        $this->emit('tM5',$this->tMoneda5);
        $this->suma();
    }

    public function fMoneda2()
    {
        $this->tMoneda2 = number_format(2 * $this->Moneda2, 2);
        $this->emit('tM2',$this->tMoneda2);
        $this->suma();
    }

    public function fMoneda1()
    {
        $this->tMoneda1 = number_format(1 * $this->Moneda1, 2);
        $this->emit('tM1',$this->tMoneda1);
        $this->suma();
    }

    public function fMoneda50c()
    {
        $this->tMoneda50c = number_format(0.50 * $this->Moneda50c, 2);
        $this->emit('tM50c',$this->tMoneda50c);
        $this->suma();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);
        $guardar = moneyfcps::create([
            'operacion' => $this->operacion,
            'bmil' => $this->Billete1000 == null ? 0: $this->Billete1000,
            'bqui' => $this->Billete500 == null ? 0: $this->Billete500 ,
            'bdoc' => $this->Billete200 == null ? 0: $this->Billete200 ,
            'bcie' => $this->Billete100 == null ? 0: $this->Billete100 ,
            'bcin' => $this->Billete50 == null ? 0: $this->Billete50,
            'bvei' => $this->Billete20 == null ? 0: $this->Billete20,
            'mvei' => $this->Moneda20 == null ? 0: $this->Moneda20,
            'mdie' => $this->Moneda10 == null ? 0: $this->Moneda10,
            'mcin' => $this->Moneda5 == null ? 0: $this->Moneda5,
            'mdos' => $this->Moneda2 == null ? 0: $this->Moneda2,
            'muno' => $this->Moneda1 == null ? 0: $this->Moneda1,
            'mpci' => $this->Moneda50c == null ? 0: $this->Moneda50c,
        ]);
        $guardar->save();
        session()->flash('message', 'Operación ejecutada con éxito');
        $this->resetUI();
    }

    public function Editar(moneyfcps $moneyfcps)
    {
        $this->Billete1000 = $moneyfcps->bmil;
        $this->Billete500 = $moneyfcps->bqui;
        $this->Billete200 = $moneyfcps->bdoc;
        $this->Billete100 = $moneyfcps->bcie;
        $this->Billete50 = $moneyfcps->bcin;
        $this->Billete20 = $moneyfcps->bvei;
        $this->Moneda20 = $moneyfcps->mvei;
        $this->Moneda10 = $moneyfcps->mdie;
        $this->Moneda5 = $moneyfcps->mcin;
        $this->Moneda2 = $moneyfcps->mdos;
        $this->Moneda1 = $moneyfcps->muno;
        $this->Moneda50c = $moneyfcps->mpci;

        $this->show = true;
        $this->emit('show-modal', 'Show Modal!');

    }

    public function Update()
    {
        $this->resetUI();
    }

    public function Destroy(moneyfcps $moneyfcps)
    {
        $moneyfcps->delete();
        session()->flash('delete', 'Elemento eliminado con éxito!');
        $this->resetUI();

    }

    protected function supersuma($fecha)
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
                    ->when($fecha , function ($query) use ($fecha) {
                        return $query->whereBetween('created_at', [$fecha . '00:00:00', $fecha . '23:59:59']);
                    })
                    ->first();
        return '$' . number_format($resultado->total_general, 2);
    }
}
