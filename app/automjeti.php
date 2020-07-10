<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class automjeti extends Model
{
    public $table = "automjeti";

    protected $fillable = [
        'nr_shasise',
        'regjistrimi',
        'lloji',
        'brendi',
        'viti',
        'aktiv',
        'kilometrat'       
    ];
}
