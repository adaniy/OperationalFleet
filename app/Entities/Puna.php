<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class puna extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    public $table = "puna";

    protected $fillable = [
        'lloji',
        'vendi',
        'fuqia_njerzore',
        'progresi',
        'mjetet',
    ];
}
