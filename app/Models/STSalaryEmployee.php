<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class STSalaryEmployee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'employ2_id', 'salario', 'prevsoc', 'subsidio', 'descuento', 'segsoc', 'infonavit', 'workingdays' ];

    public function employ2()
    {
        return $this->belongsTo(Employ2::class);
    }
}
