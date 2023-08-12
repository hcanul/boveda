<?php

namespace App\Http\Livewire\CategoryAdviser;

use App\Models\CategoryAdviser;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryAdviserController extends Component
{
    use WithPagination;

    public $name, $min, $max, $porcpago, $pagocrecliente, $bonoexcelencia, $transporte, $meta, $porpago;

    public $search, $selected_id, $pageTitle, $componentName;

    private $pagination = 5;

    protected $rules = [
        'name' => 'required',
        'min' => 'required',
        'max' => 'required',
        'porcpago' => 'required',
        'pagocrecliente' => 'required',
        'bonoexcelencia' => 'required',
        'transporte' => 'required',
        'meta' => 'required',
        'porpago' => 'required',
    ];

    protected $messages = [
        'name.required' => 'El valor es indispensable',
        'min.required' => 'El valor es indispensable',
        'max.required' => 'El valor es indispensable',
        'porcpago.required' => 'El valor es indispensable',
        'pagocrecliente.required' => 'El valor es indispensable',
        'bonoexcelencia.required' => 'El valor es indispensable',
        'transporte.required' => 'El valor es indispensable',
        'meta.required' => 'El valor es indispensable',
        'porpago.required' => 'El valor es indispensable',
    ];

    public function mount()
    {
        $this->name = null;
        $this->min = null;
        $this->max = null;
        $this->porcpago = null;
        $this->pagocrecliente = null;
        $this->bonoexcelencia = null;
        $this->transporte = null;
        $this->meta = null;
        $this->porpago = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorias Administrador';
    }

    public function render()
    {
        if($this->search){
            $data = CategoryAdviser::where('name', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = CategoryAdviser::orderBy('id', 'asc')->paginate($this->pagination);
        }

        return view('livewire.category-adviser.category-adviser',['data' => $data])
                            ->extends('layouts.themes.app')
                            ->section('content');
    }

    public function resetUI()
    {
        $this->name = null;
        $this->min = null;
        $this->max = null;
        $this->porcpago = null;
        $this->pagocrecliente = null;
        $this->bonoexcelencia = null;
        $this->transporte = null;
        $this->meta = null;
        $this->porpago = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorias Administrador';
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        CategoryAdviser::create([
            'name' => $this->name,
            'min' => $this->min,
            'max' => $this->max,
            'porcpago' => $this->porcpago,
            'pagocrecliente' => $this->pagocrecliente,
            'bonoexcelencia' => $this->bonoexcelencia,
            'transporte' => $this->transporte,
            'meta' => $this->meta,
            'porpago' => $this->porpago,
        ]);

        session()->flash('message', 'Categoria Agregada con exito!');
        $this->emit('item-added', 'Categoria Agregada con Exito');
        $this->resetUI();
    }

    public function Editar($id)
    {
        $this->selected_id = $id;

        $categoria = CategoryAdviser::findOrfail($id);
        $this->name = $categoria ->name;
        $this->min = $categoria ->min;
        $this->max = $categoria ->max;
        $this->porcpago = $categoria ->porcpago;
        $this->pagocrecliente = $categoria ->pagocrecliente;
        $this->bonoexcelencia = $categoria ->bonoexcelencia;
        $this->transporte = $categoria ->transporte;
        $this->meta = $categoria ->meta;
        $this->porpago = $categoria ->porpago;

    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $categoria = CategoryAdviser::find($this->selected_id);

        $categoria->update([
            'name' => $this->name,
            'min' => $this->min,
            'max' => $this->max,
            'porcpago' => $this->porcpago,
            'pagocrecliente' => $this->pagocrecliente,
            'bonoexcelencia' => $this->bonoexcelencia,
            'transporte' => $this->transporte,
            'meta' => $this->meta,
            'porpago' => $this->porpago,
        ]);

        $this->resetUI();
        session()->flash('message', 'Categoria Editada con exito!');
        $this->emit('item-updated', 'Categoria Actualizada');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function Destroy(CategoryAdviser $categoryAdviser)
    {
        $categoryAdviser->delete();
        session()->flash('delete', 'Categoria Eliminada con exito!');
        $this->emit('item-deleted', 'Categoria Eliminada con exito');
        $this->resetUI();
    }
}
