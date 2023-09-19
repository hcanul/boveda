<?php

namespace App\Http\Livewire\PaySheet\Payroll;

use App\Models\Cities;
use App\Models\Employ2;
use Livewire\Component;
use Livewire\WithPagination;

class ColaboratorController extends Component
{
    use WithPagination;

    public $search, $componentName, $pageTitle, $pagination, $selected_id;

    public $name, $lastname, $birthdate, $gender, $phone, $bio_id, $numIne, $direccion, $city_id, $rfc, $imss, $fechaIni, $fechaFin, $departamento, $cargo, $fpago, $sueldo, $cVariable, $activo;

    protected $rules = [
        'name' => 'required|min:4',
        'lastname' => 'required|min:2',
        'birthdate' => 'required',
        'gender' => 'required',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'bio_id' => 'required',
        'numIne' => 'required',
        'direccion' => 'required',
        'city_id' => 'required',
        'rfc' => 'required|unique:employ2s',
        'imss' => 'required|min:11',
        'fechaIni' => 'required',
        'departamento' => 'required',
        'cargo' => 'required',
        'activo' => 'required',
    ];

    protected $messages = [
        'name.required' => 'EL CAMPO NOMBRE ES REQUERIDO',
        'name.min' => 'DEBE CAPTURAR UN NOMBRE MAYOR A 4 CARACTERES',
        'lastname.required' => 'EL CAMPO APELLIDO ES REQUERIDO',
        'lastname.min' => 'EL APELLIDO CAPTURADO DEBE SER MINIMO 2 CARACTERES ',
        'birthdate.required' => 'EL CAPO ES REQUERIDO',
        'gender.required' => 'EL CAPO ES REQUERIDO',
        'phone.required' => 'EL CAPO ES REQUERIDO',
        'bio_id.required' => 'EL CAPO ES REQUERIDO',
        'numIne.required' => 'EL CAPO ES REQUERIDO',
        'direccion.required' => 'EL CAPO ES REQUERIDO',
        'city_id.required' => 'EL CAPO ES REQUERIDO',
        'rfc.required' => 'EL CAPO ES REQUERIDO',
        'rfc.unique' => 'EL RFC YA EXISTE',
        'imss.required' => 'EL CAPO ES REQUERIDO',
        'imss.min' =>'EL NSS DEBE CONTENER 11 DIGITOS',
        'fechaIni.required' => 'EL CAPO ES REQUERIDO',
        'departamento.required' => 'EL CAPO ES REQUERIDO',
        'cargo.required' => 'EL CAPO ES REQUERIDO',
        'activo.required' => 'EL CAPO ES REQUERIDO',
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function mount()
    {
        $this->search = '';
        $this->componentName = "COLABORADORES";
        $this->pageTitle = "LISTADO";
        $this->pagination = 10;
        $this->selected_id = 0;
        $this->name = "";
        $this->lastname = "";
        $this->birthdate = "";
        $this->gender = "";
        $this->phone = "";
        $this->bio_id = "";
        $this->numIne = "";
        $this->direccion = "";
        $this->city_id = "";
        $this->rfc = "";
        $this->imss = "";
        $this->fechaIni = "";
        $this->fechaFin = "";
        $this->departamento = "";
        $this->cargo = "";
        $this->fpago = "";
        $this->sueldo = "";
        $this->cVariable = "";
        $this->activo = "";
    }

    public function render()
    {
        if ($this->search)
        {
            $data = Employ2::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        }
        else
        {
            $data = Employ2::orderBy('id', 'asc')->paginate($this->pagination);
        }
        return view('livewire.pay-sheet.payroll.component',[
            'data' => $data,
            'sucursales' => Cities::all(),
        ])
        ->extends('layouts.themes.app')
        ->section('content');
    }

    public function resetUI()
    {
        $this->search = '';
        $this->componentName = "COLABORADORES";
        $this->pageTitle = "LISTADO";
        $this->pagination = 10;
        $this->selected_id = 0;
        $this->name = "";
        $this->lastname = "";
        $this->birthdate = "";
        $this->gender = "";
        $this->phone = "";
        $this->bio_id = "";
        $this->numIne = "";
        $this->direccion = "";
        $this->city_id = "";
        $this->rfc = "";
        $this->imss = "";
        $this->fechaIni = "";
        $this->fechaFin = "";
        $this->departamento = "";
        $this->cargo = "";
        $this->activo = "";
        $this->resetValidation();
        $this->resetPage();
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        Employ2::create([
            'name' => strtoupper($this->name),
            'lastname' => strtoupper($this->lastname),
            'birthdate' => $this->birthdate,
            'gender' => strtoupper($this->gender),
            'phone' => $this->phone,
            'bio_id' => $this->bio_id,
            'numIne' => $this->numIne,
            'direccion' => strtoupper($this->direccion),
            'city_id' => $this->city_id,
            'rfc' => strtoupper($this->rfc),
            'imss' => $this->imss,
            'fechaIni' => $this->fechaIni,
            'fechaFin' => $this->fechaFin == '' ? null:$this->fechaFin,
            'departamento' => strtoupper($this->departamento),
            'cargo' => strtoupper($this->cargo),
            'activo' => strtoupper($this->activo),
        ]);

        $this->resetUI();
        session()->flash('message', 'Colaborador Anexado con exito!');
        $this->emit('item-added', 'Colaborador registrada Con Éxito!');
    }

    public function Editar($id)
    {
        $employ2 = Employ2::find($id);

        $this->name = $employ2->name;
        $this->lastname = $employ2->lastname;
        $this->birthdate = $employ2->birthdate;
        $this->gender = $employ2->gender;
        $this->phone = $employ2->phone;
        $this->bio_id = $employ2->bio_id;
        $this->numIne = $employ2->numIne;
        $this->direccion = $employ2->direccion;
        $this->city_id = $employ2->city_id;
        $this->rfc = $employ2->rfc;
        $this->imss = $employ2->imss;
        $this->fechaIni = $employ2->fechaIni;
        $this->fechaFin = $employ2->fechaFin;
        $this->departamento = $employ2->departamento;
        $this->cargo = $employ2->cargo;
        $this->activo = $employ2->activo;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $employ2 = Employ2::find($this->selected_id);

        $employ2 ->update([
            'name' => strtoupper($this->name),
            'lastname' => strtoupper($this->lastname),
            'birthdate' => $this->birthdate,
            'gender' => strtoupper($this->gender),
            'phone' => $this->phone,
            'bio_id' => $this->bio_id,
            'numIne' => $this->numIne,
            'direccion' => strtoupper($this->direccion),
            'city_id' => $this->city_id,
            'rfc' => strtoupper($this->rfc),
            'imss' => $this->imss,
            'fechaIni' => $this->fechaIni,
            'fechaFin' => $this->fechaFin == '' ? null:$this->fechaFin,
            'departamento' => strtoupper($this->departamento),
            'cargo' => strtoupper($this->cargo),
            'activo' => strtoupper($this->activo),
        ]);

        $this->resetUI();
        session()->flash('message', 'Colaborador Editado con exito!');
        $this->emit('item-updated', 'Colaborador Actualizado');
    }

    public function Destroy(Employ2 $employ2)
    {
        $employ2->delete();
        session()->flash('delete', 'Colaborador Eliminado con exito!');
        $this->emit('item-deleted', 'Colaborador Eliminado con exito');
        $this->resetUI();
    }
}
