<?php

namespace App\Http\Livewire\Coins;

use App\Models\Coin;
use Livewire\Component;
use Livewire\WithPagination;

class CoinsController extends Component
{
    use WithPagination;

    public $value, $type, $search, $selected_id, $pageTitle, $componentName, $show;

    private $pagination = 10;

    protected $rules = [
        'type' => 'required|not_in:Elegir',
        'value' => 'required'
    ];

    protected $messages = [
        'type.required' => 'El tipo es requerido',
        'type.not_in'=> 'Elige un valor para el tipo distinto a Elegir',
        'value.required' => 'El valor es requerido',
    ];

    public function mount()
    {
        $this->type = 'Elegir';
        $this->pageTitle = 'Listado';
        $this->componentName = 'Denominaciones';
        $this->selected_id = 0;
        $this->show = false;
    }

    public function render()
    {
        if($this->search){
            $data = Coin::where('value', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = Coin::orderBy('id', 'asc')->paginate($this->pagination);
        }

        return view('livewire.coins.coins', ['data' => $data,])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    public function resetUI()
    {
        $this->value = '';
        $this->type = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->show = false;
    }

    public function Store()
    {

        $this->validate($this->rules, $this->messages);

        Coin::create([
            'type' => $this->type,
            'value' => $this->value,
        ]);

        $this->resetUI();

        session()->flash('message', 'Denominación Agregada con éxito!');
    }

    public function Editar(Coin $coin)
    {
        dd($coin);
    }

    public function Update()
    {
        $this->show = false;
    }

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function Destroy(Coin $coin)
    {
        $coin->delete();
        session()->flash('delete', 'Denominación eliminada con éxito!');
    }
}
