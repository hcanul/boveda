<?php

namespace App\Http\Livewire\Administrator;

use App\Models\Administrators;
use App\Models\Categories;
use App\Models\Cities;
use App\Models\Employes;
use Livewire\Component;
use Livewire\WithPagination;

class AdministratorController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public $city_id, $employes_id, $asesores, $typesucursal, $category_id, $clientesi, $carterainicio, $clientesf, $colocadoreal, $diferenciaclientes, $bonoclientes, $bonoccolocacion, $bonofina;

    public $pagination = 10;

    protected $rules = [
        'city_id' => 'required',
        'employes_id' => 'required',
        'asesores' => 'required',
        'typesucursal' => 'required',
        'category_id' => 'required',
        'clientesi' => 'required',
        'carterainicio' => 'required',
        'clientesf' => 'required',
        'colocadoreal' => 'required',
        'diferenciaclientes' => 'required',
        'bonoclientes' => 'required',
        'bonoccolocacion' => 'required',
        'bonofina' => 'required',
    ];

    protected $messages =[
        'city_id.required' => 'El valor es requerido',
        'employes_id.required'=> 'El valor es requerido',
        'asesores.required'=> 'El valor es requerido',
        'typesucursal.required'=> 'El valor es requerido',
        'category_id.required'=> 'El valor es requerido',
        'clientesi.required'=> 'El valor es requerido',
        'carterainicio.required'=> 'El valor es requerido',
        'clientesf.required'=> 'El valor es requerido',
        'colocadoreal.required'=> 'El valor es requerido',
        'diferenciaclientes.required'=> 'El valor es requerido',
        'bonoclientes.required'=> 'El valor es requerido',
        'bonoccolocacion.required'=> 'El valor es requerido',
        'bonofina.required'=> 'El valor es requerido',
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function mount()
    {
        $this->city_id = null;
        $this->employes_id = null;
        $this->asesores = null;
        $this->typesucursal = null;
        $this->category_id = null;
        $this->clientesi = null;
        $this->carterainicio = null;
        $this->clientesf = null;
        $this->colocadoreal = null;
        $this->diferenciaclientes = null;
        $this->bonoclientes = null;
        $this->bonoccolocacion = null;
        $this->bonofina = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'CÁLCULO ADMINISTRADORES';
    }

    public function render()
    {
        if($this->search){
            $data = Administrators::where('created_at', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = Administrators::orderBy('id', 'asc')->paginate($this->pagination);
        }

        $sucursales = Cities::all();
        $asesores = Employes::whereTypeemployesId(1)->get();

        return view('livewire.administrator.administrator', [
            'data' => $data,
            'sucursales' => $sucursales,
            'asesores2' => $asesores,
            ])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    public function resetUI()
    {
        $this->city_id = null;
        $this->employes_id = null;
        $this->asesores = null;
        $this->typesucursal = null;
        $this->category_id = null;
        $this->clientesi = null;
        $this->carterainicio = null;
        $this->clientesf = null;
        $this->colocadoreal = null;
        $this->diferenciaclientes = null;
        $this->bonoclientes = null;
        $this->bonoccolocacion = null;
        $this->bonofina = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'CÁLCULO ADMINISTRADORES';
    }

    public function calcatego()
    {
        if($this->asesores <= 2)
            $this->typesucursal = 'A';
        elseif ($this->asesores == 3)
            $this->typesucursal = 'B';
        elseif ($this->asesores > 3)
            $this->typesucursal = 'C';

        $this->emit('catego',$this->typesucursal);

    }

    public function caltype()
    {
        $cate = Categories::whereType($this->typesucursal)->get();
        foreach ($cate as $key => $value) {
            if( $this->carterainicio > $value->min  && $this->carterainicio <= $value->max ){
                $this->category_id = $value->name;
                session(['categoria'=>$value]);
            }
        }
        $this->emit('typesuc',$this->category_id);
    }

    public function diferencia()
    {
        $this->diferenciaclientes = $this->clientesf - $this->clientesi;

        if($this->diferenciaclientes < 0)
            $this->diferenciaclientes = 0;

        $this->bonoclientes = $this->diferenciaclientes * session('categoria')->pagocrecliente;

        $this->emit('dife',[$this->diferenciaclientes, $this->bonoclientes]);
    }

    public function coloca()
    {
        $this->bonoccolocacion = $this->colocadoreal * session('categoria')->porcpago;

        $this->bonofina = $this->bonoclientes + $this->bonoccolocacion;

        $this->emit('colocado', [$this->bonoccolocacion, $this->bonofina]);
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        Administrators::create([
            'city_id' => $this->city_id,
            'employes_id' => $this->employes_id,
            'asesores' => $this->asesores,
            'typesucursal' => $this->typesucursal,
            'category_id' => session('categoria')->id,
            'clientesi' => $this->clientesi,
            'carterainicio' => $this->carterainicio,
            'clientesf' => $this->clientesf,
            'colocadoreal' => $this->colocadoreal,
            'diferenciaclientes' => $this->diferenciaclientes,
            'bonoclientes' => $this->bonoclientes,
            'bonoccolocacion' => $this->bonoccolocacion,
            'bonofina' => $this->bonofina,
        ]);

        $this->resetUI();
        session()->flash('message', 'Calculo Anexado con exito!');
        $this->emit('item-added', 'Calculo realizado registrada!');
    }

    public function Editar($id)
    {
        $administrator = Administrators::find($id);

        $this->city_id = $administrator->city_id;
        $this->employes_id = $administrator->employes_id;
        $this->asesores = $administrator->asesores;
        $this->typesucursal = $administrator->typesucursal;
        $this->category_id = $administrator->category_id;
        $this->clientesi = $administrator->clientesi;
        $this->carterainicio = $administrator->carterainicio;
        $this->clientesf = $administrator->clientesf;
        $this->colocadoreal = $administrator->colocadoreal;
        $this->diferenciaclientes = $administrator->diferenciaclientes;
        $this->bonoclientes = $administrator->bonoclientes;
        $this->bonoccolocacion = $administrator->bonoccolocacion;
        $this->bonofina = $administrator->bonofina;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $admini = Administrators::find($this->selected_id);

        $admini->update([
            'city_id' => $this->city_id,
            'employes_id' => $this->employes_id,
            'asesores' => $this->asesores,
            'typesucursal' => $this->typesucursal,
            'category_id' => $this->category_id,
            'clientesi' => $this->clientesi,
            'carterainicio' => $this->carterainicio,
            'clientesf' => $this->clientesf,
            'colocadoreal' => $this->colocadoreal,
            'diferenciaclientes' => $this->diferenciaclientes,
            'bonoclientes' => $this->bonoclientes,
            'bonoccolocacion' => $this->bonoccolocacion,
            'bonofina' => $this->bonofina,
        ]);

        $this->resetUI();
        session()->flash('message', 'Calculo Editada con exito!');
        $this->emit('item-updated', 'Calculo Actualizada');
    }

    public function Destroy(Administrators $administrator)
    {
        $administrator->delete();
        session()->flash('delete', 'Calculo Eliminado con exito!');
        $this->emit('item-deleted', 'Calculo Eliminado con exito');
        $this->resetUI();
    }

}
