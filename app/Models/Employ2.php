<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employ2 extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'name', 'lastname', 'birthdate', 'gender', 'phone', 'bio_id', 'numIne', 'direccion', 'city_id', 'rfc', 'imss', 'fechaIni', 'fechaFin', 'departamento', 'cargo', 'fpago', 'sueldo', 'cVariable', 'activo' ];

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
}
