<?php

namespace App\Http\Livewire\PaySheet\SalaryPeriods;

use App\Models\SalaryPeriod;
use Livewire\Component;
use Livewire\WithPagination;

class SalaryPeriodsController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $numperiodo, $fechaini, $fechafin;

    public $pagination = 10;

    protected $rules = [
        'numperiodo' => 'required',
        'fechaini' => 'required',
        'fechafin' => 'required'
    ];

    protected $messages =[
        'numperiodo.required' => 'El valor es necesario',
        'fechaini.required' => 'El valor es necesario',
        'fechafin.required' => 'El valor es necesario',

    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    protected function periodoNuevo()
    {
        $salary = SalaryPeriod::orderBy('id', 'desc')->first();
        if (!$salary)
        {
            return 1;

        }
        else
        {
            return $salary->numperiodo + 1;
        }
    }

    public function mount()
    {
        $this->numperiodo = $this->periodoNuevo();
        $this->fechaini = '';
        $this->fechafin ='';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'SECCIÓN DE PERIODOS';
    }

    public function render()
    {
        if($this->search){
            $data = SalaryPeriod::where('numperiodo', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = SalaryPeriod::orderBy('id', 'asc')->paginate($this->pagination);
        }

        return view('livewire.pay-sheet.salary-periods.component', [
            'data' => $data,
        ])
        ->extends('layouts.themes.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->numperiodo = $this->periodoNuevo();
        $this->fechaini = '';
        $this->fechafin ='';
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'SECCIÓN DE PERIODOS';
        $this->resetValidation();
        $this->resetPage();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        SalaryPeriod::create([
            'numperiodo' => $this->numperiodo,
            'fechaini' => $this->fechaini,
            'fechafin' => $this->fechafin,
        ]);

        $this->resetUI();
        session()->flash('message', 'Periodo Anexado con exito!');
        $this->emit('item-added', 'Periodo registrada Con Éxito!');
    }

    public function Editar($id)
    {
        $rol = SalaryPeriod::find($id);

        $this->numperiodo = $rol->numperiodo;
        $this->fechaini = $rol->fechaini;
        $this->fechafin = $rol->fechafin;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $rol = SalaryPeriod::find($this->selected_id);

        $rol->update([
            'numperiodo' => $this->numperiodo,
            'fechaini' => $this->fechaini,
            'fechafin' => $this->fechafin
        ]);

        $this->resetUI();
        session()->flash('message', 'Periodo Editado con exito!');
        $this->emit('item-updated', 'Periodo Actualizado');
    }

    public function Destroy(SalaryPeriod $salaryPeriod)
    {
        $salaryPeriod->delete();
        session()->flash('delete', 'Periodo Eliminado con exito!');
        $this->emit('item-deleted', 'Periodo Eliminado con exito');
        $this->resetUI();
    }
}
