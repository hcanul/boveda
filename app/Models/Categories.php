<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'type', 'min', 'max', 'porcpago', 'pagocrecliente', 'bonoexcelencia', 'transporte', 'meta', 'porpago'];

    public function administrator()
    {
        return $this->hasMany(Administrators::class);
    }
}
