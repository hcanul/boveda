<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class moneyfcps extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['operacion', 'bmil','bqui','bdoc','bcie','bcin','bvei','mvei','mdie','mcin','mdos','muno','mpci'];
}
