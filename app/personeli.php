<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class personeli extends Model
{

    use softDeletes;

    protected $dates = ['deleted_at'];

    public $table = "personeli";

    protected $fillable = [
        'nr_personal    ',
        'emri_mbiemri',
        'data_lindjes',
        'nr_telefonite',
        'niveli_shkollimit',
        'grupi_gjakut',
        'aktiv'
    ];
}
