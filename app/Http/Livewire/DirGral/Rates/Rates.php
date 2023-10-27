<?php

namespace App\Http\Livewire\DirGral\Rates;

use App\Models\Rates as Tasas;
use Livewire\Component;
use Livewire\WithPagination;

class Rates extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $name, $cicle, $minamount, $maxamount, $rate;

    public $pagination = 10;

    protected $queryString = ['search'];

    protected $rules = [
        'name' => 'required|unique:roles,name|min:4',
        'cicle' => 'required',
        'minamount' => 'required',
        'maxamount' => 'required',
        'rate' => 'required'
    ];

    protected $messages =[
        'name.required' => 'El valor es necesario',
        'name.unique' => 'No se puede duplicar la tasa',
        'name.min' => 'Debe contener minimo 4 caracteres',
        'cicle' => 'El ciclo es obligatorio',
        'minamount' => 'El mínimo es obligatorio',
        'maxamount' => 'El maximo es obligatorio',
        'rate' => 'La tasa es obligatoria'
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function mount()
    {
        $this->name = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE TASAS';
        $this->cicle = '';
        $this->minamount = '';
        $this->maxamount = '';
        $this->rate = '';
    }

    public function render()
    {
        if($this->search){
            $data = Tasas::where('name', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = Tasas::orderBy('id', 'asc')->paginate($this->pagination);
        }

        return view('livewire.dir-gral.rates.component', ['data' => $data])
                ->extends('layouts.themes.app')
                ->section('content');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE TASAS';
        $this->cicle = '';
        $this->minamount = '';
        $this->maxamount = '';
        $this->rate = '';
        $this->resetValidation();
        $this->resetPage();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        Tasas::create([
            'name' => $this->name,
            'cicle' => $this->cicle,
            'Minamount' => $this->minamount,
            'Maxamount' => $this->maxamount,
            'rate' => $this->rate,
        ]);

        $this->resetUI();
        session()->flash('message', 'Tasa Anexada con exito!');
        $this->emit('item-added', 'Tasa registrada Con Éxito!');
    }

    public function Editar($id)
    {
        $tasa = Tasas::find($id);

        $this->name = $tasa->name;
        $this->cicle = $tasa->cicle;
        $this->minamount = $tasa->Minamount;
        $this->maxamount = $tasa->Maxamount;
        $this->rate = $tasa->rate;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $rol = Tasas::find($this->selected_id);

        $rol->update([
            'name' => $this->name,
            'cicle' => $this->cicle,
            'Minamount' => $this->minamount,
            'Maxamount' => $this->maxamount,
            'rate' => $this->rate,
        ]);

        $this->resetUI();
        session()->flash('message', 'Tasa Actualizada con exito!');
        $this->emit('item-updated', 'Tasa Actualizada');
    }

    public function Destroy(Tasas $tasa)
    {
        $tasa->delete();
        session()->flash('delete', 'Tasa Eliminada con exito!');
        $this->emit('item-deleted', 'Tasa Eliminada con exito');
        $this->resetUI();
    }
}
