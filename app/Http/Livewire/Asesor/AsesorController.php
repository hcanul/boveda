<?php

namespace App\Http\Livewire\Asesor;

use App\Models\Adviser;
use App\Models\CategoryAdviser;
use App\Models\Cities;
use App\Models\Employes;
use Livewire\Component;
use Livewire\WithPagination;

class AsesorController extends Component
{

    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public  $city_id, $employes_id, $clientesi, $carterainicio, $srinicio, $porsrinicio, $clientesf, $carterafinal, $srfinal, $porsrfinal, $category_adviser_id, $metacoloca, $colocadoreal, $poralcancemetacoloca, $diferenciaclientes, $diferenciacartera, $bonoclientes, $bonoccolocacion, $bonoexcelencia, $bonofina;

    public $pagination = 10;

    protected $rules = [
        'city_id' => 'required',
        'employes_id' => 'required',
        'clientesi' => 'required',
        'carterainicio' => 'required',
        'srinicio' => 'required',
        'porsrinicio' => 'required',
        'clientesf' => 'required',
        'carterafinal' => 'required',
        'srfinal' => 'required',
        'porsrfinal' => 'required',
        'category_adviser_id' => 'required',
        'metacoloca' => 'required',
        'colocadoreal' => 'required',
        'poralcancemetacoloca' => 'required',
        'diferenciaclientes' => 'required',
        'diferenciacartera' => 'required',
        'bonoclientes' => 'required',
        'bonoccolocacion' => 'required',
        'bonoexcelencia' => 'required',
        'bonofina' => 'required',
    ];

    protected $messages =[
        'city_id.required' => 'El valor es necesario',
        'employes_id.required' => 'El valor es necesario',
        'clientesi.required' => 'El valor es necesario',
        'carterainicio.required' => 'El valor es necesario',
        'srinicio.required' => 'El valor es necesario',
        'porsrinicio.required' => 'El valor es necesario',
        'clientesf.required' => 'El valor es necesario',
        'carterafinal.required' => 'El valor es necesario',
        'srfinal.required' => 'El valor es necesario',
        'porsrfinal.required' => 'El valor es necesario',
        'category_adviser_id.required' => 'El valor es necesario',
        'metacoloca.required' => 'El valor es necesario',
        'colocadoreal.required' => 'El valor es necesario',
        'poralcancemetacoloca.required' => 'El valor es necesario',
        'diferenciaclientes.required' => 'El valor es necesario',
        'diferenciacartera.required' => 'El valor es necesario',
        'bonoclientes.required' => 'El valor es necesario',
        'bonoccolocacion.required' => 'El valor es necesario',
        'bonoexcelencia.required' => 'El valor es necesario',
        'bonofina.required' => 'El valor es necesario',
    ];

    protected $listeners = [
        'deleteRow' => 'Destroy',
    ];

    public function mount()
    {
        $this->city_id = null;
        $this->employes_id = null;
        $this->clientesi = null;
        $this->carterainicio = null;
        $this->srinicio = null;
        $this->porsrinicio = null;
        $this->clientesf = null;
        $this->carterafinal = null;
        $this->srfinal = null;
        $this->porsrfinal = null;
        $this->category_adviser_id = null;
        $this->metacoloca = null;
        $this->colocadoreal = null;
        $this->poralcancemetacoloca = null;
        $this->diferenciaclientes = null;
        $this->diferenciacartera = null;
        $this->bonoclientes = null;
        $this->bonoccolocacion = null;
        $this->bonoexcelencia = null;
        $this->bonofina = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'CÁLCULO ASESOR';
    }

    public function render()
    {
        if($this->search){
            $data = Adviser::where('created_at', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = Adviser::orderBy('id', 'asc')->paginate($this->pagination);
        }

        if ($this->city_id)
        {
            $asesores = Employes::whereCityId($this->city_id)->whereTypeemployesId(2)->get();
        }
        else
        {
            $asesores = Employes::all();
        }

        $sucursales = Cities::all();
        // $asesores = Employes::whereTypeemployesId(2)->get();

        return view('livewire.asesor.asesor', [
            'data' => $data,
            'sucursales' => $sucursales,
            'asesores2' => $asesores,
            ])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    // public function resetUI()
    // {
    //     $this->city_id = null;
    //     $this->employes_id = null;
    //     $this->clientesi = null;
    //     $this->carterainicio = null;
    //     $this->srinicio = null;
    //     $this->porsrinicio = null;
    //     $this->clientesf = null;
    //     $this->carterafinal = null;
    //     $this->srfinal = null;
    //     $this->porsrfinal = null;
    //     $this->category_adviser_id = null;
    //     $this->metacoloca = null;
    //     $this->colocadoreal = null;
    //     $this->poralcancemetacoloca = null;
    //     $this->diferenciaclientes = null;
    //     $this->diferenciacartera = null;
    //     $this->bonoclientes = null;
    //     $this->bonoccolocacion = null;
    //     $this->bonoexcelencia = null;
    //     $this->bonofina = null;
    //     $this->search = '';
    //     $this->selected_id = 0;
    //     $this->pageTitle = 'Listado';
    //     $this->componentName = 'CÁLCULO ASESOR';
    // }

    // public function Store()
    // {
    //     $this->validate($this->rules, $this->messages);

    //     Administrators::create([
    //         'city_id' => $this->city_id,
    //         'employes_id' => $this->employes_id,
    //         'asesores' => $this->asesores,
    //         'typesucursal' => $this->typesucursal,
    //         'category_id' => session('categoria')->id,
    //         'clientesi' => $this->clientesi,
    //         'carterainicio' => $this->carterainicio,
    //         'clientesf' => $this->clientesf,
    //         'colocadoreal' => $this->colocadoreal,
    //         'diferenciaclientes' => $this->diferenciaclientes,
    //         'bonoclientes' => $this->bonoclientes,
    //         'bonoccolocacion' => $this->bonoccolocacion,
    //         'bonofina' => $this->bonofina,
    //     ]);

    //     $this->resetUI();
    //     session()->flash('message', 'Calculo Anexado con exito!');
    //     $this->emit('item-added', 'Calculo realizado registrada!');
    // }

    // public function Editar($id)
    // {
    //     $administrator = Administrators::find($id);

    //     $this->city_id = $administrator->city_id;
    //     $this->employes_id = $administrator->employes_id;
    //     $this->asesores = $administrator->asesores;
    //     $this->typesucursal = $administrator->typesucursal;
    //     $this->category_id = $administrator->category_id;
    //     $this->clientesi = $administrator->clientesi;
    //     $this->carterainicio = $administrator->carterainicio;
    //     $this->clientesf = $administrator->clientesf;
    //     $this->colocadoreal = $administrator->colocadoreal;
    //     $this->diferenciaclientes = $administrator->diferenciaclientes;
    //     $this->bonoclientes = $administrator->bonoclientes;
    //     $this->bonoccolocacion = $administrator->bonoccolocacion;
    //     $this->bonofina = $administrator->bonofina;

    //     $this->selected_id = $id;
    // }

    // public function Update()
    // {
    //     $this->validate($this->rules, $this->messages);

    //     $admini = Administrators::find($this->selected_id);

    //     $admini->update([
    //         'city_id' => $this->city_id,
    //         'employes_id' => $this->employes_id,
    //         'asesores' => $this->asesores,
    //         'typesucursal' => $this->typesucursal,
    //         'category_id' => $this->category_id,
    //         'clientesi' => $this->clientesi,
    //         'carterainicio' => $this->carterainicio,
    //         'clientesf' => $this->clientesf,
    //         'colocadoreal' => $this->colocadoreal,
    //         'diferenciaclientes' => $this->diferenciaclientes,
    //         'bonoclientes' => $this->bonoclientes,
    //         'bonoccolocacion' => $this->bonoccolocacion,
    //         'bonofina' => $this->bonofina,
    //     ]);

    //     $this->resetUI();
    //     session()->flash('message', 'Calculo Editada con exito!');
    //     $this->emit('item-updated', 'Calculo Actualizada');
    // }

    // public function Destroy(Administrators $administrator)
    // {
    //     $administrator->delete();
    //     session()->flash('delete', 'Calculo Eliminado con exito!');
    //     $this->emit('item-deleted', 'Calculo Eliminado con exito');
    //     $this->resetUI();
    // }

    public function psr()
    {
        if ($this->carterainicio > 0 && $this->srinicio > 0)
        {
            $this->porsrinicio = $this->srinicio / $this->carterainicio;
        }
        else
        {
            $this->porsrinicio = 0;
        }
    }
}
