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
}
