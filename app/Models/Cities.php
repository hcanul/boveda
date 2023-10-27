<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cities extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function administrator()
    {
        return $this->hasMany(Administrator::class);
    }

    public function adviser()
    {
        return $this->hasMany(Adviser::class);
    }

    public function coordinator()
    {
        return $this->hasMany(Coordinator::class);
    }
    public function manager()
    {
        return $this->hasMany(Manager::class);
    }

    public function regional()
    {
        return $this->hasMany(Regional::class);
    }

    public function employ2()
    {
        return $this->hasMany(Employ2::class);
    }

    public function coordinadores()
    {
        return $this->hasMany(Coordinators::class);
    }
}
