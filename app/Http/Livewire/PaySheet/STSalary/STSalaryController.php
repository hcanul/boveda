<?php

namespace App\Http\Livewire\PaySheet\STSalary;

use App\Models\Employ2;
use App\Models\STSalaryEmployee;
use Livewire\Component;
use Livewire\WithPagination;

class STSalaryController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public  $employ2_id, $salario, $prevsoc, $subsidio, $descuento, $segsoc, $infonavit, $workingdays;

    public $pagination = 10;

    protected $rules = [
        'employ2_id' => 'required',
        'salario' => 'required',
        'prevsoc' => 'required',
        'subsidio' => 'required',
        'descuento' => 'required',
        'segsoc' => 'required',
        'infonavit' => 'required',
        'workingdays' => 'required',
    ];

    protected $messages =[
        'employ2_id.required' => 'El valor es Requerido',
        'salario.required' => 'El valor es Requerido',
        'prevsoc.required' => 'El valor es Requerido',
        'subsidio.required' => 'El valor es Requerido',
        'descuento.required' => 'El valor es Requerido',
        'segsoc.required' => 'El valor es Requerido',
        'infonavit.required' => 'El valor es Requerido',
        'workingdays.required' => 'El valor es Requerido',
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function mount()
    {
        $this->employ2_id = null;
        $this->salario = null;
        $this->prevsoc = null;
        $this->subsidio = null;
        $this->descuento = null;
        $this->segsoc = null;
        $this->infonavit = null;
        $this->workingdays = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'TABLA DE SALARRIOS ESTATICOS';
    }

    public function render()
    {
        if($this->search){
            $numero = Employ2::where('name', 'like', '%' . $this->search .'%')->get('name')[0];
            if ($numero)
                $data = STSalaryEmployee::where('employ2_id', 'like', '%' . $this->search .'%')->paginate($this->pagination);
            else
                $data = STSalaryEmployee::orderBy('id', 'asc')->paginate($this->pagination);
        }else{
            $data = STSalaryEmployee::orderBy('id', 'asc')->paginate($this->pagination);
        }

        $colab = Employ2::all();

        return view('livewire.pay-sheet.s-t-salary.component',[
            'data' => $data,
            'colabo' => $colab,
        ])
        ->extends('layouts.themes.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->employ2_id = null;
        $this->salario = null;
        $this->prevsoc = null;
        $this->subsidio = null;
        $this->descuento = null;
        $this->segsoc = null;
        $this->infonavit = null;
        $this->workingdays = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'TABLA DE SALARRIOS ESTATICOS';
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        STSalaryEmployee::create([
            'employ2_id' => $this->employ2_id,
            'salario' => $this->salario,
            'prevsoc' => $this->prevsoc,
            'subsidio' => $this->subsidio,
            'descuento' => $this->descuento,
            'segsoc' => $this->segsoc,
            'infonavit' => $this->infonavit,
            'workingdays' => $this->workingdays
        ]);

        $this->resetUI();
        session()->flash('message', 'Salario Estatico Anexado con exito!');
        $this->emit('item-added', 'Salario Estatico registrada Con Éxito!');
    }

    public function Editar($id)
    {
        $empleado = STSalaryEmployee::find($id);

        $this->employ2_id = $empleado->employ2_id;
        $this->salario = $empleado->salario;
        $this->prevsoc = $empleado->prevsoc;
        $this->subsidio = $empleado->subsidio;
        $this->descuento = $empleado->descuento;
        $this->segsoc = $empleado->segsoc;
        $this->infonavit = $empleado->infonavit;
        $this->workingdays = $empleado->workingdays;

        $this->selected_id = $id;
    }

    public function Uptade()
    {
        $this->validate($this->rules, $this->messages);

        $empleado = STSalaryEmployee::find($this->selected_id);

        $empleado->update([
            'employ2_id' => $this->employ2_id,
            'salario' => $this->salario,
            'prevsoc' => $this->prevsoc,
            'subsidio' => $this->subsidio,
            'descuento' => $this->descuento,
            'segsoc' => $this->segsoc,
            'infonavit' => $this->infonavit,
            'workingdays' => $this->workingdays
        ]);

        $this->resetUI();
        session()->flash('message', 'Salario Estatico Editado con exito!');
        $this->emit('item-updated', 'Salario Estatico Actualizado');
    }

    public function Destroy(STSalaryEmployee $employ2)
    {
        $employ2->delete();
        session()->flash('delete', 'Salario Estatico Eliminado con exito!');
        $this->emit('item-deleted', 'Salario Estatico Eliminado con exito');
        $this->resetUI();
    }
}
