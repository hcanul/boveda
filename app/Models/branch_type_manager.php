<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class branch_type_manager extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name' , 'rangeinit', 'rangefin'];
}