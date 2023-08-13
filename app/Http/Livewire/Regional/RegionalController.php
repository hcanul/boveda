<?php

namespace App\Http\Livewire\Regional;

use App\Models\CategoryRegional;
use App\Models\Cities;
use App\Models\Employes;
use App\Models\Regional;
use Livewire\Component;
use Livewire\WithPagination;

class RegionalController extends Component
{
    use WithPagination;

    public $search, $selected_id, $pageTitle, $componentName;

    public  $city_id, $employes_id, $clientesi, $carterainicio, $srinicio, $porsrinicio, $clientesf, $carterafinal, $srfinal, $porsrfinal, $category_adviser_id, $metacoloca, $colocadoreal, $poralcancemetacoloca, $diferenciaclientes, $diferenciacartera, $bonoclientes, $bonoccolocacion, $bonoexcelencia, $bonofina, $base, $rmetac, $redsr;

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
        'base' => 'required',
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
        'base.required' => 'El Valor es necesario',
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
        $this->base = null;
        $this->rmetac = null;
        $this->redsr = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'CÁLCULO REGIONAL';
    }


    public function render()
    {
        if($this->search){
            $data = Regional::where('created_at', 'like', '%' . $this->search .'%')->paginate($this->pagination);
        }else{
            $data = Regional::orderBy('id', 'asc')->paginate($this->pagination);
        }

        if ($this->city_id)
        {
            $asesores = Employes::whereCityId($this->city_id)->whereTypeemployesId(5)->get();
        }
        else
        {
            $asesores = Employes::all();
        }

        $sucursales = Cities::all();

        return view('livewire.regional.regional', [
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
        $this->base = null;
        $this->rmetac = null;
        $this->redsr = null;
        $this->bonofina = null;
        $this->search = '';
        $this->selected_id = 0;
        $this->pageTitle = 'Listado';
        $this->componentName = 'CÁLCULO REGIONAL';
    }

    public function Store()
    {
        $this->validate($this->rules, $this->messages);

        Regional::create([
            'city_id' => $this->city_id,
            'employes_id' => $this->employes_id,
            'clientesi' => $this->clientesi,
            'carterainicio' => $this->carterainicio,
            'srinicio' => $this->srinicio,
            'porsrinicio' => $this->porsrinicio,
            'clientesf' => $this->clientesf,
            'carterafinal' => $this->carterafinal,
            'srfinal' => $this->srfinal,
            'porsrfinal' => $this->porsrfinal,
            'category_adviser_id' => session('categoria'),
            'metacoloca' => $this->metacoloca,
            'colocadoreal' => $this->colocadoreal,
            'poralcancemetacoloca' => $this->poralcancemetacoloca,
            'diferenciaclientes' => $this->diferenciaclientes,
            'diferenciacartera' => $this->diferenciacartera,
            'bonoclientes' => $this->bonoclientes,
            'bonoccolocacion' => $this->bonoccolocacion,
            'bonoexcelencia' => $this->bonoexcelencia,
            'base' => $this->base,
            'rmetac' => $this->rmetac,
            'redsr' => $this->redsr,
            'bonofina' => $this->bonofina,
        ]);

        $this->resetUI();
        session()->flash('message', 'Calculo Anexado con exito!');
        $this->emit('item-added', 'Calculo registrada Con Éxito!');
    }

    public function Editar($id)
    {
        $region = Regional::find($id);

        $this->city_id = $region->city_id;
        $this->employes_id = $region->employes_id;
        $this->clientesi = $region->clientesi;
        $this->carterainicio = $region->carterainicio;
        $this->srinicio = $region->srinicio;
        $this->porsrinicio = $region->porsrinicio;
        $this->clientesf = $region->clientesf;
        $this->carterafinal = $region->carterafinal;
        $this->srfinal = $region->srfinal;
        $this->porsrfinal = $region->porsrfinal;
        $this->category_adviser_id = $region->category_adviser_id;
        $this->metacoloca = $region->metacoloca;
        $this->colocadoreal = $region->colocadoreal;
        $this->poralcancemetacoloca = $region->poralcancemetacoloca;
        $this->diferenciaclientes = $region->diferenciaclientes;
        $this->diferenciacartera = $region->diferenciacartera;
        $this->bonoclientes = $region->bonoclientes;
        $this->bonoccolocacion = $region->bonoccolocacion;
        $this->bonoexcelencia = $region->bonoexcelencia;
        $this->bonofina = $region->bonofina;
        $this->base = $region->base;
        $this->rmetac = $region->rmetac;
        $this->redsr = $region->redsr;

        $this->selected_id = $id;
    }

    public function Update()
    {
        $this->validate($this->rules, $this->messages);

        $regional = Regional::find($this->selected_id);

        $regional->update([
            'city_id' => $this->city_id,
            'employes_id' => $this->employes_id,
            'clientesi' => $this->clientesi,
            'carterainicio' => $this->carterainicio,
            'srinicio' => $this->srinicio,
            'porsrinicio' => $this->porsrinicio,
            'clientesf' => $this->clientesf,
            'carterafinal' => $this->carterafinal,
            'srfinal' => $this->srfinal,
            'porsrfinal' => $this->porsrfinal,
            'category_adviser_id' => session('categoria'),
            'metacoloca' => $this->metacoloca,
            'colocadoreal' => $this->colocadoreal,
            'poralcancemetacoloca' => $this->poralcancemetacoloca,
            'diferenciaclientes' => $this->diferenciaclientes,
            'diferenciacartera' => $this->diferenciacartera,
            'bonoclientes' => $this->bonoclientes,
            'bonoccolocacion' => $this->bonoccolocacion,
            'bonoexcelencia' => $this->bonoexcelencia,
            'base' => $this->base,
            'rmetac' => $this->rmetac,
            'redsr' => $this->redsr,
            'bonofina' => $this->bonofina,
        ]);

        $this->resetUI();
        session()->flash('message', 'Calculo Editada con exito!');
        $this->emit('item-updated', 'Calculo Actualizado');
    }

    public function Destroy(Regional $regional)
    {
        $regional->delete();
        session()->flash('delete', 'Calculo Eliminado con exito!');
        $this->emit('item-deleted', 'Calculo Eliminado con exito');
        $this->resetUI();
    }

    public function psr()
    {
        if ($this->carterainicio > 0 && $this->srinicio > 0)
        {
            $this->porsrinicio = ($this->srinicio / $this->carterainicio) * 100;
        }
        else
        {
            $this->porsrinicio = 0;
        }
    }

    public function srfinalcalculo()
    {
        if ($this->srfinal > 0 && $this->carterafinal > 0)
        {
            $this->porsrfinal = ($this->srfinal / $this->carterafinal) * 100;
        }
        else{
            $this->porsrfinal = 0;
        }

        $todas = CategoryRegional::all();

        foreach ($todas as $key => $value) {
            if($this->carterainicio > $value->min && $this->carterainicio <= $value->max)
            {
                $this->category_adviser_id = $value->name;
                session(['categoria' => $value->id]);
            }
        }
    }

    public function calculometa()
    {
        if ($this->colocadoreal > 0 && $this->metacoloca > 0)
        {
            $this->poralcancemetacoloca = ($this->colocadoreal / $this->metacoloca) * 100;
        }
        else
        {
            $this->poralcancemetacoloca = 0 . ' %';
        }

        $this->diferenciaclientes = $this->clientesf - $this->clientesi;
        $this->diferenciacartera = $this->carterafinal - $this->carterainicio;

        $tipo = CategoryRegional::whereName($this->category_adviser_id)->get();
        $this->bonoclientes = $this->diferenciaclientes * $tipo[0]->pagocrecliente;
        $this->bonoccolocacion = $this->colocadoreal * $tipo[0]->porcpago;

        if ($this->srfinal <= 0)
        {
            $this->bonoexcelencia = $tipo[0]->bonoexcelencia;
        }
        else
        {
            $this->bonoexcelencia = 0;
        }

        $this->base = $tipo[0]->meta * 0.01;

        $this->rmetac = $this->poralcancemetacoloca >= $this->base ? $this->bonoccolocacion: 0;

        if($this->porsrfinal <= 2 )
        {
            if ($this->porsrfinal <= 1){
                $this->redsr = $this->rmetac;
            }else if ($this->porsrfinal > 1 && $this->porsrfinal <= 1.5)
            {
                $this->redsr = $this->rmetac * 0.75;
            }else if($this->porsrfinal > 1.5 && $this->porsrfinal <= 2){
                $this->redsr = $this->rmetac * 0.50;
            }
        }
        else
        {
            $this->redsr = 0;
        }

        $this->bonofina = ($this->redsr + $this->bonoexcelencia + $this->bonoclientes) <= 0 ? 0:$this->redsr + $this->bonoexcelencia + $this->bonoclientes;
    }
}
