<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karburanti extends Model
{
    public $table = "karburanti";

    protected $fillable = [
        'automjeti_id',
        'personeli_id',
        'litra',
        'shuma',
        'kilometrat',
        'data',
        'deleted_at'      
    ];
}
