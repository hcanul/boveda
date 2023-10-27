<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotores extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name','lastName','city_id', 'coordinator_id', 'phone'];
}
