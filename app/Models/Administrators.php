<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use League\CommonMark\Extension\CommonMark\Delimiter\Processor\EmphasisDelimiterProcessor;

class Administrators extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'city_id', 'employes_id', 'asesores', 'typesucursal', 'category_id', 'clientesi', 'carterainicio', 'clientesf', 'colocadoreal', 'diferenciaclientes', 'bonoclientes', 'bonoccolocacion', 'bonofina' ];

    public function employes()
    {
        return $this->belongsTo(Employes::class);
    }

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
