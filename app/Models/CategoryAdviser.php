<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryAdviser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [ 'name', 'min', 'max', 'porcpago', 'pagocrecliente', 'bonoexcelencia', 'transporte', 'meta', 'porpago', 'pagoinc', 'poralgo' ];
}
