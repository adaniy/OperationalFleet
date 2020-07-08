<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class automjeti extends Model
{
    public $table = "automjeti";

    protected $fillable = [
        'nr_shasise',
        'lloji',
        'brendi',
        'viti',
        'aktiv',
        'kilometrat'       
    ];
}
