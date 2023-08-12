<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adviser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [  'city_id', 'employes_id', 'clientesi', 'carterainicio', 'srinicio', 'porsrinicio', 'clientesf', 'carterafinal', 'srfinal', 'porsrfinal', 'category_adviser_id', 'metacoloca', 'colocadoreal', 'poralcancemetacoloca', 'diferenciaclientes', 'diferenciacartera', 'bonoclientes', 'bonoccolocacion', 'bonoexcelencia', 'base', 'rmetac', 'redsr', 'bonofina' ];

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }

    public function employes()
    {
        return $this->belongsTo(Employes::class);
    }
}
