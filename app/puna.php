<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class puna extends Model
{
    public $table = "puna";

    protected $fillable = [
        'lloji',
        'vendi',
        'fuqia_njerzore',
        'progresi',
        'mjetet',
        'deleted_at'       
    ];
}
