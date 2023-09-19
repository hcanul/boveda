<?php

namespace App\Http\Livewire\Advisers;

use App\Models\Administrators;
use App\Models\branch_type_administrator;
use Livewire\Component;
use Livewire\WithPagination;

class BTAdminstratorController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $name, $rangeinit, $rangefin;

    public $pagination = 10;

    protected $rules = [
        'name' => 'required|min:1',
        'rangeinit' => 'required',
        'rangefin' => 'required',
    ];

    protected $messages =[
        'name.required' => 'El valor es necesario',
        'name.min' => 'Debe contener minimo 1 caracteres',
        'rangeinit.required' => 'El Rango inicial inicial es requerida.',
        'rangefin.required' => 'El Rango final inicial es requerida.',
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function mount()
    {
        $this->name = '';
        $this->rangeinit = '';
        $this->rangefin = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'SECCIÓN DE TIPOS ADMINISTRADOR';
    }

    public function render()
    {
        if($this->search){
            $data = branch_type_administrator::where('name', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = branch_type_administrator::orderBy('id', 'asc')->paginate($this->pagination);
        }

        return view('livewire.advisers.administrador.component', ['data' => $data])
                    ->extends('layouts.themes.app')
                    ->section('content');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->rangeinit = '';
        $this->rangefin = '';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'SECCIÓN DE TIPOS ADMINISTRADOR';
        $this->resetValidation();
        $this->resetPage();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        branch_type_administrator::create(['name' => $this->name, 'rangeinit'=>$this->rangeinit, 'rangefin' => $this->rangefin]);

        $this->resetUI();
        session()->flash('message', 'Rol Anexado con exito!');
        $this->emit('item-added', 'Rol registrada Con Éxito!');
    }

    public function Editar($id)
    {
        $branch = branch_type_administrator::find($id);

        $this->name = $branch->name;
        $this->rangeinit = $branch->rangeinit;
        $this->rangefin = $branch->rangefin;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $branch = branch_type_administrator::find($this->selected_id);

        $branch->update(['name' => $this->name, 'rangeinit'=>$this->rangeinit, 'rangefin' => $this->rangefin]);

        $this->resetUI();
        session()->flash('message', 'Rol Editado con exito!');
        $this->emit('item-updated', 'Rol Actualizado');
    }

    public function Destroy(branch_type_administrator $branch)
    {
        $category = Administrators::whereType($branch->name)->get();

        if($category)
        {
            session()->flash('delete', 'El tipo se sucursal no se puede eliminar');
            $this->emit('item-deleted', 'No se puede eliminar');
            $this->resetUI();
            return ;
        }
        else
        {
            $branch->delete();
            session()->flash('delete', 'Rol Eliminado con exito!');
            $this->emit('item-deleted', 'Rol Eliminado con exito');
            $this->resetUI();
        }
    }
}
