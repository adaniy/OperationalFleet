<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Pjese extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    public $table = "pjese";

    protected $fillable = [
        'automjeti_id',
        'personeli_id',
        'lloji',
        'pershkrimi',
        'shuma',
    ];
}
