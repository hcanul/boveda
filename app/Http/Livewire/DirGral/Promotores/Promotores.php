<?php

namespace App\Http\Livewire\DirGral\Promotores;

use App\Models\Cities;
use App\Models\Coordinadores;
use App\Models\Promotores as ModelsPromotores;
use Livewire\Component;
use Livewire\WithPagination;

class Promotores extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $pagination = 10;

    public $name, $lastName, $city_id, $phone, $coordinator_id;

    protected $queryString = ['search'];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    protected $rules = [
        'name' => 'required|min:4',
        'lastName' => 'required|min:4',
        'city_id' => 'required',
        'phone' => 'required',
        'coordinator_id' => 'required'
    ];

    protected $messages = [
        'name.required' => 'El nombre es requerido',
        'name.min' => 'El nombre debe tener al menos 4 caracteres',
        'lastName.required' => 'El apellido es requerido',
        'lastName.min' => 'El apellido debe tener al menos 4 caracteres',
        'city_id.required' => 'La ciudad es requerida',
        'phone.required' => 'El telefono es requerido',
        'coordinator_id' => 'El Nombre del coordinador es necesario'
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
        $this->coordinator_id = '';

    }

    public function render()
    {
        if($this->search){
            $data = ModelsPromotores::where('name', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = ModelsPromotores::orderBy('id', 'asc')->paginate($this->pagination);
        }
        $cities = Cities::all();

        $coordi = Coordinadores::all();

        return view('livewire.dir-gral.promotores.component',
        [
                'data'=>$data,
                'cities'=>$cities,
                'coordinators' => $coordi
            ])
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
        $this->coordinator_id = '';
        $this->resetValidation();
        $this->resetPage();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        ModelsPromotores::create([
            'name' => $this->name,
            'lastName' => $this->lastName,
            'city_id' => $this->city_id,
            'phone' => $this->phone,
            'coordinator_id' => $this->coordinator_id
        ]);

        $this->resetUI();
        session()->flash('message', 'Promotor Creado con exito!');
        $this->emit('item-added', 'Promotor Creado Con Éxito!');
    }

    public function Editar($id)
    {
        $promo = ModelsPromotores::find($id);

        $this->name = $promo->name;
        $this->lastName = $promo->lastName;
        $this->city_id = $promo->city_id;
        $this->phone = $promo->phone;

        $this->selected_id = $id;
    }
}
