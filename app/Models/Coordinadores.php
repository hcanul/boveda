<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinadores extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','lastName','city_id', 'phone'];

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
}
