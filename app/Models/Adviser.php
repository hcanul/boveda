<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adviser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'city_id', 'employes_id', 'asesores', 'typesucursal', 'category_id', 'clientesi', 'carterainicio', 'clientesf', 'colocadoreal', 'diferenciaclientes', 'bonoclientes', 'bonoccolocacion', 'bonofina' ];
}
