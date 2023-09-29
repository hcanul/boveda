<?php

namespace App\Http\Livewire\PaySheet\PayrollPrint;

use App\Models\SalaryEmployee;
use App\Models\SalaryPeriod;
use Livewire\Component;
use Livewire\WithPagination;

class PayRollController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $vistaCarrillo, $vistaMorelos, $vistaTulum, $vistaPlaya, $vistaPlaya2, $vistaCancun, $vistaCancun2;

    public $pagination = 10;

    protected $rules = [
        'name' => 'required|unique:roles,name|min:4',
    ];

    protected $messages =[
        'name.required' => 'El valor es necesario',
        'name.unique' => 'No se puede duplicar el Rol',
        'name.min' => 'Debe contener minimo 4 caracteres',
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
        'CarrilloPrinter',
        'MorelosPrinter',
        'TulumPrinter',
        'PlayaPrinter',
        'Playa2Printer',
        'CancunPrinter',
        'Cancun2Printer',
        'CarrilloView',
        'MorelosView',
        'TulumView',
        'PlayaView',
        'Playa2View',
        'CancunView',
        'Cancun2View',
    ];

    public function mount()
    {
        $this->vistaCarrillo = [];
        $this->vistaMorelos = [];
        $this->vistaTulum = [];
        $this->vistaPlaya = [];
        $this->vistaPlaya2 = [];
        $this->vistaCancun = [];
        $this->vistaCancun2 = [];
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'SECCIÓN DE IMPRESIÓN DE NOMINA';
    }

    public function render()
    {
        $data = SalaryPeriod::orderBy('id', 'desc')->paginate($this->pagination);

        return view('livewire.pay-sheet.payroll-print.component', [
            'data'=>$data
        ])
        ->extends('layouts.themes.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->emit('hide-modal', 'Rol registrada Con Éxito!');
    }

    public function CarrilloPrinter($id)
    {
        return redirect()->route('printerNomina', [$id, 1]);
    }

    public function MorelosPrinter($id)
    {
        return redirect()->route('printerNomina', [$id, 2]);
    }

    public function TulumPrinter($id)
    {
        dd('printer Tulum');
    }

    public function PlayaPrinter($id)
    {
        dd('printer Playa');
    }

    public function Playa2Printer($id)
    {
        dd('printer Playa2');
    }

    public function CancunPrinter($id)
    {
        dd('printer Cancun');
    }

    public function Cancun2Printer($id)
    {
        dd('printer Cancun2');
    }

    // funciones de vista

    public function CarrilloView($id)
    {
        $this->vistaCarrillo = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 1)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }

    public function MorelosView($id)
    {
        $this->vistaMorelos = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 2)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }

    public function TulumView($id)
    {
        $this->vistaTulum = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 3)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }

    public function PlayaView($id)
    {
        $this->vistaPlaya = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 4)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }

    public function Playa2View($id)
    {
        $this->vistaPlaya2 = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 5)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }

    public function CancunView($id)
    {
        $this->vistaCancun = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 6)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }

    public function Cancun2View($id)
    {
        $this->vistaCancun2 = SalaryEmployee::join('employ2s', 'Salary_employees.employ2_id', '=', 'employ2s.id')
                                ->where('employ2s.city_id', '=', 7)->whereSalaryperiodId($id)->orderBy('Salary_employees.id', 'desc')->get();
    }




}
