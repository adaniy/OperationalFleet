<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class karburanti extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    public $table = "karburanti";

    protected $fillable = [
        'automjeti_id',
        'personeli_id',
        'litra',
        'shuma',
        'data',
    ];
}
