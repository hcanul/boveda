<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employes extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'city_id', 'typeemployes_id', ];

    public function administrator()
    {
        return $this->hasMany(Administrators::class);
    }

    public function adviser()
    {
        return $this->hasMany(Adviser::class);
    }
}
