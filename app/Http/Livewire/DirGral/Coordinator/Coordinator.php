<?php

namespace App\Http\Livewire\DirGral\Coordinator;

use App\Models\Cities;
use App\Models\Coordinadores as Coordinador;
use Livewire\Component;
use Livewire\WithPagination;

class Coordinator extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $pagination = 10;

    public $name, $lastName, $city_id, $phone;

    protected $queryString = ['search'];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    protected $rules = [
        'name' => 'required|min:4',
        'lastName' => 'required|min:4',
        'city_id' => 'required',
        'phone' => 'required'
    ];

    protected $messages = [
        'name.required' => 'El nombre es requerido',
        'name.min' => 'El nombre debe tener al menos 4 caracteres',
        'lastName.required' => 'El apellido es requerido',
        'lastName.min' => 'El apellido debe tener al menos 4 caracteres',
        'city_id.required' => 'La ciudad es requerida',
        'phone.required' => 'El telefono es requerido'
    ];

    public function mount()
    {
        $this->name = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE COORDINADOR';
        $this->lastName = '';
        $this->city_id = '';
        $this->phone = '';
    }

    public function render()
    {
        if($this->search){
            $data = Coordinador::where('name', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = Coordinador::orderBy('id', 'asc')->paginate($this->pagination);
        }
        $cities = Cities::all();
        return view('livewire.dir-gral.coordinator.component', ['data' => $data, 'cities'=>$cities])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->lastName = '';
        $this->city_id = '';
        $this->phone = '';
        $this->selected_id = 0;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE COORDINADOR';
        $this->lastName = '';
        $this->city_id = '';
        $this->phone = '';
        $this->resetValidation();
        $this->resetPage();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        Coordinador::create([
            'name' => $this->name,
            'lastName' => $this->lastName,
            'city_id' => $this->city_id,
            'phone' => $this->phone
        ]);

        $this->resetUI();
        session()->flash('message', 'Coordinador Creado con exito!');
        $this->emit('item-added', 'Coordinador Creado Con Éxito!');
    }

    public function Editar($id)
    {
        $coordinador = Coordinador::find($id);

        $this->name = $coordinador->name;
        $this->lastName = $coordinador->lastName;
        $this->city_id = $coordinador->city_id;
        $this->phone = $coordinador->phone;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $coordinador = Coordinador::find($this->selected_id);

        $coordinador->update([
            'name' => $this->name,
            'lastName' => $this->lastName,
            'city_id' => $this->city_id,
            'phone' => $this->phone
        ]);

        $this->resetUI();
        session()->flash('message', 'Coordinador Actualizado con exito!');
        $this->emit('item-updated', 'Coordinador Actualizado');
    }

    public function Destroy(Coordinador $coordinador)
    {
        $coordinador->delete();
        session()->flash('delete', 'Coordinador Eliminado con exito!');
        $this->emit('item-deleted', 'Coordinador Eliminado con exito');
        $this->resetUI();
    }
}
