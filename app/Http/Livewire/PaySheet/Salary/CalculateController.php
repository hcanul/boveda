<?php

namespace App\Http\Livewire\PaySheet\Salary;

use App\Models\Cities;
use App\Models\Employ2;
use App\Models\SalaryEmployee;
use App\Models\SalaryPeriod;
use App\Models\STSalaryEmployee;
use Livewire\Component;
use Livewire\WithPagination;

class CalculateController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName, $ciudad;

    public  $employ2_id, $salario, $prevsoc, $subsidio, $descuento, $segsoc, $infonavit, $workingdays;

    public $pagination = 10;

    protected $queryString = ['search'];

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
        $this->ciudad = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'NOMINA GENERACIÓN';
    }

    public function render()
    {
        if ($this->search)
        {
            $numero = Employ2::where('name', 'like', '%' . $this->search . '%')->get('id')[0]->id;
            if($numero){
                $carrillo = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 1)->whereEmploy2Id($numero)->paginate($this->pagination);
                $morelos = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 2)->whereEmploy2Id($numero)->paginate($this->pagination);
                $tulum = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 3)->whereEmploy2Id($numero)->paginate($this->pagination);
                $playa = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 4)->whereEmploy2Id($numero)->paginate($this->pagination);
                $cancun = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 5)->whereEmploy2Id($numero)->paginate($this->pagination);
            }else{
                $carrillo = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 1)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
                $morelos = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 2)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
                $tulum = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 3)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
                $playa = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 4)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
                $cancun = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                            ->where('employ2s.city_id', '=', 5)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
            }
        }
        else{
            $carrillo = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                        ->where('employ2s.city_id', '=', 1)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
            $morelos = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                        ->where('employ2s.city_id', '=', 2)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
            $tulum = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                        ->where('employ2s.city_id', '=', 3)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
            $playa = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                        ->where('employ2s.city_id', '=', 4)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
            $cancun = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                        ->where('employ2s.city_id', '=', 5)->orderBy('Salary_employees.id', 'desc')->paginate($this->pagination);
        }

        if ($this->ciudad)
        {
            $colab = Employ2::whereCityId($this->ciudad)->get();
        }
        else
        {
            $colab = Employ2::all();
        }

        if($this->employ2_id)
        {
            try {
                $tableSalary = STSalaryEmployee::where('employ2_id','=',$this->employ2_id)->get()[0];
                if($tableSalary->count() > 0)
                {
                    $this->salario = $tableSalary->salario;
                    $this->prevsoc = $tableSalary->prevsoc;
                    $this->subsidio = $tableSalary->subsidio;
                    $this->descuento = $tableSalary->descuento;
                    $this->segsoc = $tableSalary->segsoc;
                    $this->infonavit = $tableSalary->infonavit;
                    $this->workingdays = $tableSalary->workingdays;
                }
            } catch (\Throwable $th) {
                $this->resetUI();
                session()->flash('delete', 'NO EXISTE INFO DE ESTE COLABORADOR!');
                $this->emit('item-watch', 'NO EXISTE INFO DE ESTE COLABORADOR!');
            }
        }

        $cities = Cities::all();

        return view('livewire.pay-sheet.salary.component',[
            'carrillo' => $carrillo,
            'morelos' => $morelos,
            'tulum' =>$tulum ,
            'playa' => $playa,
            'cancun' => $cancun,
            'cities' => $cities,
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
        $this->ciudad = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'NOMINA GENERACIÓN';
        $this->resetValidation();
        $this->resetPage();
    }

    public function Editar($id)
    {
        $salario = SalaryEmployee::find($id);

        $this->employ2_id = $salario->employ2_id;
        $this->salario = $salario->salario;
        $this->prevsoc = $salario->prevsoc;
        $this->subsidio = $salario->subsidio;
        $this->descuento = $salario->descuento;
        $this->segsoc = $salario->segsoc;
        $this->infonavit = $salario->infonavit;
        $this->workingdays = $salario->workingdays;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $salario = SalaryEmployee::find($this->selected_id);

        $salario->update([
            'employ2_id' => $this->employ2_id,
            'salaryperiod_id' => $this->salaryperiod_id,
            'salario' => $this->salario,
            'prevsoc' => $this->prevsoc,
            'subsidio' => $this->subsidio,
            'descuento' => $this->descuento,
            'segsoc' => $this->segsoc,
            'infonavit' => $this->infonavit,
            'workingdays' => $this->workingdays,
        ]);

        $this->resetUI();
        session()->flash('message', 'Rol Editado con exito!');
        $this->emit('item-updated', 'Rol Actualizado');
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        $periodo = SalaryPeriod::orderBy('id', 'desc')->first();
        try {
            $verifica = SalaryEmployee::whereEmploy2Id($this->employ2_id)->whereSalaryperiodId($periodo == null ? 1 : $periodo->id)->orderBy('id', 'desc')->first();
            if($verifica != null)
            {
                $this->resetUI();
                session()->flash('delete', 'El Salario para este colaborador ya existe en este periodo');
                $this->emit('item-watch', 'El Salario para este colaborador ya existe en este periodo');
                return ;
            }

        } catch (\Throwable $th) {
            //throw $th;
        }

        SalaryEmployee::create([
            'employ2_id' => $this->employ2_id,
            'salaryperiod_id' => $periodo == null ? 1 : $periodo->id,
            'salario' => $this->salario,
            'prevsoc' => $this->prevsoc,
            'subsidio' => $this->subsidio,
            'descuento' => $this->descuento,
            'segsoc' => $this->segsoc,
            'infonavit' => $this->infonavit,
            'workingdays' => $this->workingdays,
        ]);
    }

    public function Destroy(SalaryEmployee $salaryemployee)
    {
        $salaryemployee->delete();
        session()->flash('delete', 'Colaborador Eliminado con exito!');
        $this->emit('item-deleted', 'Colaborador Eliminado con exito');
        $this->resetUI();
    }
}
