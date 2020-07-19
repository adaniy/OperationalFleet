<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personeli extends Model
{
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
